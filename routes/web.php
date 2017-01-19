<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@index');
Route::get('/products/{category}', 'FrontController@products')->name('products.list');
Route::get('/product/{name}', 'FrontController@product')->name('products.single');

// Cart routes
Route::resource('cart','CartController');
Route::put('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

// Blog routes
Route::resource('blog','BlogController');

// Auth routes
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

// Checkout Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/checkout/shipping', 'CheckoutController@shipping')->name('checkout.shipping');
});

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('admin.admin');
    })->name('admin.index');
});
