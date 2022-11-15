<?php

use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Profile\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\PackagesController as AdminPackagesController;
use App\Http\Controllers\Admin\PackageCategoriesController as AdminPackageCategoriesController;
use App\Http\Controllers\Admin\PackageTypesController as AdminPackageTypesController;

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
Route::get('/',[FrontController::class,'index']);
Route::get('/about',[FrontController::class,'about'])->name('about-us');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/pricing',[FrontController::class,'pricing'])->name('pricing');
Route::get('/services',[FrontController::class,'services'])->name('services');

/* Admin Route */
Route::prefix('admin')->name('admin.')->group(function () {
    // Authentication
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'authenticate'])->name('login');
    });
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // Athenticated Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/profile', [AdminDashboardController::class, 'profile'])->name('dashboard.profile');
        Route::post('/dashboard/profile/update', [AdminProfileController::class, 'profile_update'])->name('dashboard.profile.update');

        // Packages
        Route::resource('/packages', AdminPackagesController::class);
        Route::resource('/package-categories', AdminPackageCategoriesController::class);
        Route::resource('/package-types', AdminPackageTypesController::class);
    });
});
