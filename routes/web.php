<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
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

Route::get('/',[MainController::class, 'index'] )->name('index');
Route::get('/cart', [MainController::class, 'cart'] )->name('cart');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/product', [MainController::class, 'product'])->name('product');

Route::middleware("auth")->group(function (){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::middleware("guest")->group(function (){
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post ('/login_process', [AuthController::class, 'login'])->name('login_process');
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post ('/register_process', [AuthController::class, 'register'])->name('register_process');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
