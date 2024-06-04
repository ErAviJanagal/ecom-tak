<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#-----------------------------frontend route----------------------------------#
Route::controller(App\Http\Controllers\FrontController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('products/{category?}/{product?}', 'products')->name('products');
    Route::post('search-products', 'search_products')->name('search-products');
    Route::get('cart','cart')->middleware('auth')->name('cart');
});
Route::controller(App\Http\Controllers\CatalogController::class)->group(function () {
    
    Route::post('manage-cart-product', 'manage_cart_product')->middleware('auth')->name('manage-cart-product');
    Route::post('add-to-cart', 'add_to_cart')->middleware('auth')->name('add-to-cart');
    
});

Route::controller(App\Http\Controllers\UserController::class)->group(function () {
    Route::get('user/login', 'user_login')->name('user/login');
    Route::get('user/register', 'user_register')->name('user/register');
    Route::get('user/logout', 'user_logout')->name('user/logout');
});