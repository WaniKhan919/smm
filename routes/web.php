<?php

use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[FrontController::class,'index']);
Route::get('/about',[FrontController::class,'about'])->name('about-us');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/pricing',[FrontController::class,'pricing'])->name('pricing');
Route::get('/services',[FrontController::class,'services'])->name('services');
