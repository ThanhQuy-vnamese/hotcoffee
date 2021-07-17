<?php

use App\Http\Controllers\LoginController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [App\Http\Controllers\HomeController::class, 'getview'])->name('home');
Route::get('/table', [App\Http\Controllers\TableController::class, 'getview'])->name('table');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'getview'])->name('menu');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'getview'])->name('shop');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'getview'])->name('contact');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'getview'])->name('about');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'getview'])->name('blog');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'getview'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'getview'])->name('checkout');
//Route::get('/login', [LoginController::class, 'getview']);
//Route::post('/action_login', [LoginController::class, 'Login'])->name('actionLogin');
//Route::post('/action_create', [LoginController::class, 'create'])->name('actionCreate');
