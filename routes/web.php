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
//Authentication
Auth::routes();


//Cart
Route::get('/getcart', 'IndexController@getCart');
Route::get('/','IndexController@index');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.index'); // ADD
Route::get('/remove-form-cart/{id}', 'ProductController@removeFromCart'); //Remove 1 item From Cart
Route::get('/remove-form-cart/{id}', 'ProductController@deleteFromCart'); //Delete items from Cart


Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::group(['middleware' => ['admin']],function() {

    Route::get('/admin', 'AdminController@index');
});

//Product
Route::get('/create/product', 'ProductController@create');
Route::post('/store/product', 'ProductController@store');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/update/product/{id}', 'ProductController@update');
Route::get('/delete/product/{id}', 'ProductController@destroy');

//Type
Route::get('/create/type', 'TypeController@create');
Route::post('/update/type/{id}', 'TypeController@update');
Route::post('/store/type', 'TypeController@store');
Route::get('/edit/type/{id}', 'TypeController@edit');
Route::get('/delete/type/{id}', 'TypeController@destroy');

//Vip
Route::get('/create/vip', 'VipController@create');
Route::post('/update/vip/{id}', 'VipController@update');
Route::post('/store/vip', 'VipController@store');
Route::get('/edit/vip/{id}', 'VipController@edit');
Route::get('/delete/vip/{id}', 'VipController@destroy');

//Delivery
Route::get('/create/delivery', 'DeliveryController@create');
Route::post('/update/delivery/{id}', 'DeliveryController@update');
Route::post('/store/delivery', 'DeliveryController@store');
Route::get('/edit/delivery/{id}', 'DeliveryController@edit');
Route::get('/delete/delivery/{id}', 'DeliveryController@destroy');

//Size
Route::get('/create/size', 'SizeController@create');
Route::post('/update/size/{id}', 'SizeController@update');
Route::post('/store/size', 'SizeController@store');
Route::get('/edit/size/{id}', 'SizeController@edit');
Route::get('/delete/size/{id}', 'SizeController@destroy');
//Interval
Route::get('/create/time', 'TimeController@create');
Route::post('/update/time/{id}', 'TimeController@update');
Route::post('/store/time', 'TimeController@store');
Route::get('/edit/time/{id}', 'TimeController@edit');
Route::get('/delete/time/{id}', 'TimeController@destroy');

//Baskets
Route::get('/create/basket', 'BasketController@create');
Route::post('/update/basket/{id}', 'BasketController@update');
Route::post('/store/basket', 'BasketController@store');
Route::get('/edit/basket/{id}', 'BasketController@edit');
Route::get('/delete/basket/{id}', 'BasketController@destroy');

//Pages
Route::get('/about-us', 'IndexController@about');
Route::get('/vigvams', 'IndexController@vigvams');
Route::get('/contacts', 'IndexController@contacts');
Route::get('/order', 'IndexController@order');
Route::get('/cart', 'IndexController@getCart');
Route::get('/deliver', 'IndexController@deliver');
Route::get('/festivities', 'IndexController@corpclient');
//Route::get('/admin', 'IndexController@admin');

Route::get('/all/flowers', 'ProductController@flowers');
Route::get('/all/boxes', 'ProductController@boxes');
