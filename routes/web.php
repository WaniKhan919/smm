<?php

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Profile\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\User\UserController as AdminUserController;
use App\Http\Controllers\Admin\Blog\Category\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Blog\Post\PostController as AdminPostController;
use App\Http\Controllers\Admin\Password_Reset\PasswordResetController as AdminPasswordResetController;
use App\Http\Controllers\Admin\PackagesController as AdminPackagesController;
use App\Http\Controllers\Admin\PackageCategoriesController as AdminPackageCategoriesController;
use App\Http\Controllers\Admin\PackageTypesController as AdminPackageTypesController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Admin\ServicePackageCategoriesController as AdminServicePackageCategoriesController;
use App\Http\Controllers\Admin\ServicePackagesController as AdminServicePackagesController;
use App\Http\Controllers\Admin\ReviewsController as AdminReviewsController;
use App\Http\Controllers\Admin\Message\MessageController as AdminMessageController;
use App\Http\Controllers\front\ContactController as FrontContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\front\UserController;
use App\Models\PackageCategory;
use App\Models\User;
use Auth as Authentication;

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

Route::get('thankyou', [FrontController::class, 'thankyou']);

//Front Route//
Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/about',[FrontController::class,'about'])->name('about-us');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/blog/{id}',[FrontController::class,'blog'])->name('blog');
Route::get('/blog/{id}',[FrontController::class,'blog'])->name('blog');
Route::get('/blog/detail/{id}',[FrontController::class,'blogDetail'])->name('blog-detail');
Route::post('/blog/search/',[FrontController::class,'blogSearch'])->name('blog-search');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/pricing',[FrontController::class,'pricing'])->name('pricing');
Route::get('/service/{id}', [FrontController::class, 'service'])->name('service');
Route::get('/service/category/{id}',[FrontController::class,'servicesCategory'])->name('service-category');
Route::middleware('guest:web')->group(function () {
    Route::get('/login', [FrontController::class, 'login'])->name('login');
    Route::get('/register', [FrontController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('user.register');
    Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
});
Route::get('/logout',[UserController::class,'logout'])->name('user-logout');
Route::post('/user/contact/form', [FrontContactController::class, 'index'])->name('user.contact.form');

Route::middleware('auth:web')->group(function() {
    Route::get('/user/profile',[UserController::class,'profile'])->name('user-profile');
    Route::get('/user/change/password',[UserController::class,'changepassword'])->name('user-change-password');
    Route::put('/user/update/profile',[UserController::class,'updateprofile'])->name('update.user.profile');
    Route::put('/user/update/password',[UserController::class,'updatepassword'])->name('user-update-password');
    Route::get('/user/dashboard',[UserController::class,'dashbard'])->name('user-dashboard');
    Route::get('/user/orders',[UserController::class,'orders'])->name('user-orders');
});
Route::post('/user/buy',[UserController::class,'buypackage'])->name('buy_package');
Route::get('/user/success',[UserController::class,'success'])->name('user.payment.success');
Route::get('/user/cancel',[UserController::class,'cancel'])->name('user.payment.cancel');

//});
/* Admin Route */
Route::prefix('admin')->name('admin.')->group(function () {
    // Authentication
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'authenticate'])->name('login');
    });
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // Password Resetting
    Route::middleware('guest:admin')->group(function () {
        Route::get('/password/reset', [AdminPasswordResetController::class, 'index'])->name('password.reset.page');
        Route::post('/password/reset/email', [AdminPasswordResetController::class, 'email'])->name('password.reset.email');
        Route::get('/reset/password/{token}', [AdminPasswordResetController::class, 'reset_page'])->name('password.reset');
        Route::post('/reset/change/password', [AdminPasswordResetController::class, 'change_password'])->name('reset.change.password');
    });

    // Athenticated Routes
    Route::middleware(['auth:admin'])->group(function () {
        // Dashboard Routes
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Profile Routes
        Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('profile');
        Route::post('/profile/update', [AdminProfileController::class, 'profile_update'])->name('profile.update');
        Route::post('/profile/change/password', [AdminProfileController::class, 'change_password'])->name('profile.change.password');

        // Category Crud Routes
        Route::resource('user', AdminUserController::class);
        
        //Order Routes
        Route::resource('order', AdminOrderController::class);
        Route::get('order/detail/{id}',[AdminOrderController::class,'orderDetail'])->name('order.detail');
        Route::get('order/{id}',[AdminOrderController::class,'destroy'])->name('order.delete');
        Route::get('order/{id}/{status}',[AdminOrderController::class,'status'])->name('order.status');
        
        // User Crud Routes
        Route::resource('/blog/category', AdminCategoryController::class, [
            'as' => 'blog'
        ]);

        // Post Crud Routes
        Route::resource('/blog/post', AdminPostController::class, [
            'as' => 'blog'
        ]);
        Route::get('/dashboard/profile', [AdminDashboardController::class, 'profile'])->name('dashboard.profile');
        Route::post('/dashboard/profile/update', [AdminProfileController::class, 'profile_update'])->name('dashboard.profile.update');

        // Packages Crud Routes
        Route::resource('/packages', AdminPackagesController::class);
        Route::resource('/package-categories', AdminPackageCategoriesController::class);
        Route::resource('/package-types', AdminPackageTypesController::class);
        Route::get('/package-types/{category_id}/json', [AdminPackageTypesController::class, 'getTypesJSON'])->name('package-types.json');

        // Services Crud Routes
        Route::resource('services', AdminServicesController::class);
        Route::resource('service-package-categories', AdminServicePackageCategoriesController::class);
        Route::resource('service-packages', AdminServicePackagesController::class);
        Route::get('/service-package-categories/{service_id}/json', [AdminServicePackageCategoriesController::class, 'getCategoriesJSON'])->name('service-package-categories.json');

        // Messages Crud Routes
        Route::resource('message', AdminMessageController::class);

        //FAQ's Crud Routes
        Route::resource('faqs',FaqController::class);

        // Reviews
        Route::resource('/reviews', AdminReviewsController::class);
    });
});
// Stripe Guest Login
Route::get('/stripe-guest/login', function(){
    $user = User::where('email', 'guest@gmail.com')->first();
    if(!Authentication::check()){
        if($user){
            Authentication::login($user);
        }
    }
    return (Auth::user());
});