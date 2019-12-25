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

Route::get('/', 'PagesController@home');
Route::get('checkout', 'PagesController@checkout');
Route::get('cart', 'PagesController@cart');
Route::get('contact', 'PagesController@contact');
Route::get('login', 'PagesController@login');
Route::get('404', 'PagesController@404');
Route::get('products', 'PagesController@index');
Auth::routes();

Route::get('/admin', 'DashboardController@index');
