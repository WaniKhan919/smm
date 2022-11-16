<?php

use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Profile\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\Blog\Category\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Blog\Post\PostController as AdminPostController;
use App\Http\Controllers\Admin\Password_Reset\PasswordResetController as AdminPasswordResetController;
use App\Http\Controllers\Admin\PackagesController as AdminPackagesController;
use App\Http\Controllers\Admin\PackageCategoriesController as AdminPackageCategoriesController;
use App\Http\Controllers\Admin\PackageTypesController as AdminPackageTypesController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\front\UserController;

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
//Front Route//
Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/about',[FrontController::class,'about'])->name('about-us');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/pricing',[FrontController::class,'pricing'])->name('pricing');
Route::get('/services',[FrontController::class,'services'])->name('services');
Route::get('/login',[FrontController::class,'login'])->name('login');
Route::get('/register',[FrontController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'register'])->name('user.register');
Route::post('/user/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user-logout');
Route::get('/user/profile',[UserController::class,'profile'])->name('user-profile');
Route::get('/user/change/password',[UserController::class,'changepassword'])->name('user-change-password');

Route::get('/user/dashboard',[UserController::class,'dashbard'])->name('user-dashboard');

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
        Route::get('/dashboard/profile', [AdminDashboardController::class, 'profile'])->name('dashboard.profile');
        Route::post('/dashboard/profile/update', [AdminProfileController::class, 'profile_update'])->name('dashboard.profile.update');

        // Packages
        Route::resource('/packages', AdminPackagesController::class);
        Route::resource('/package-categories', AdminPackageCategoriesController::class);
        Route::resource('/package-types', AdminPackageTypesController::class);
        Route::get('/package-types/{category_id}/json', [AdminPackageTypesController::class, 'getTypesJSON'])->name('package-types.json');

        //FAQ's
        Route::resource('faqs',FaqController::class);
    });
});