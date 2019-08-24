<?php

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
    return view('home');
});

Route::get('/products', 'ProductsController@index');

Route::get('/products/{id}', 'ProductsController@show');


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/categoria/{id}/{name}', 'ProductsController@category');


Route::get('/mobile', function () {
    return view('mobile');
});


Route::get('cart', 'ProductsController@cart');

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
