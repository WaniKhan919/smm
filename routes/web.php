<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Profile\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\Blog\Category\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Blog\Post\PostController as AdminPostController;
use App\Http\Controllers\Admin\Password_Reset\PasswordResetController as AdminPasswordResetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('cmd/{cmd}', function ($cmd) {
    Artisan::call($cmd);
    echo "<pre style='color:white;background-color:black;padding:20px;'>";
    return Artisan::output();
});

Route::get('/', function () {
    return view('welcome');
});

/* Admin Route */
Route::prefix('admin')->name('admin.')->group(function () {
    // Authentication
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'authenticate'])->name('login');
    });
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // Password Resetting
    Route::middleware('guest')->group(function () {
        Route::get('/password/reset', [AdminPasswordResetController::class, 'index'])->name('password.reset.page');
        Route::post('/password/reset/email', [AdminPasswordResetController::class, 'email'])->name('password.reset.email');
        Route::get('/reset/password/{token}', [AdminPasswordResetController::class, 'reset_page'])->name('password.reset');
        Route::post('/reset/change/password', [AdminPasswordResetController::class, 'change_password'])->name('reset.change.password');
    });

    // Athenticated Routes
    Route::middleware('auth')->group(function () {
        // Dashboard Routes
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        // Profile Routes
        Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('profile');
        Route::post('/profile/update', [AdminProfileController::class, 'profile_update'])->name('profile.update');
        Route::post('/profile/change/password', [AdminProfileController::class, 'change_password'])->name('profile.change.password');
        // Category Routes
        Route::resource('/blog/category', AdminCategoryController::class, [
            'as' => 'blog'
        ]);
        // Post Routes
        Route::resource('/blog/post', AdminPostController::class, [
            'as' => 'blog'
        ]);
    });
});