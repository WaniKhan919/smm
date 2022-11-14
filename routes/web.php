<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

    // Athenticated Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    });
});
