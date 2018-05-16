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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// To catagories
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}/details', 'ProductController@display');

// To articles
Route::get('/products', 'ProductController@index');
Route::get('products/{id}/details', 'ProductController@display');
