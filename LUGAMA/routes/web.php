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

// Route::get('/', function () {
//     return view('landing-page');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/products' , function() {
//     return view('products');
// });

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product/{id}', 'ProductController@show')->name('product');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');

Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/addtocart', 'CartController@store')->middleware('auth');
Route::post('/cartclose', 'CartController@cartclose')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');
