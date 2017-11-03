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

Route::get('/create/product', 'ProductController@create');
Route::post('/store/product', 'ProductController@store');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/update/product/{id}', 'ProductController@update');

Route::get('/create/type', 'TypeController@create');
Route::post('/update/type/{id}', 'TypeController@update');
Route::post('/store/type', 'TypeController@store');
Route::get('/edit/type/{id}', 'TypeController@edit');

Route::get('/create/vip', 'VipController@create');
Route::post('/update/vip/{id}', 'VipController@update');
Route::post('/store/vip', 'VipController@store');
Route::get('/edit/vip/{id}', 'VipController@edit');

Route::get('/create/delivery', 'DeliveryController@create');
Route::post('/update/delivery/{id}', 'DeliveryController@update');
Route::post('/store/delivery', 'DeliveryController@store');
Route::get('/edit/delivery/{id}', 'DeliveryController@edit');

Route::get('/create/size', 'SizeController@create');
Route::post('/update/size/{id}', 'SizeController@update');
Route::post('/store/size', 'SizeController@store');
Route::get('/edit/size/{id}', 'SizeController@edit');
