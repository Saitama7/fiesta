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

Route::get('/','IndexController@index');
Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.index'
]);

//Cart
Route::get('/getcart', 'IndexController@getCart');

//Route::get('/add-to-cart/{id}', 'ProductController@getIndex')->name('product.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::group(['middleware' => ['admin']],function() {
    Route::get('/admin',function(){
       return view('admin');
    });
    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/admin', 'AdminController@index');

});

//Product
Route::get('/create/product', 'ProductController@create');
Route::post('/store/product', 'ProductController@store');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/update/product/{id}', 'ProductController@update');

//Type
Route::get('/create/type', 'TypeController@create');
Route::post('/update/type/{id}', 'TypeController@update');
Route::post('/store/type', 'TypeController@store');
Route::get('/edit/type/{id}', 'TypeController@edit');

//Vip
Route::get('/create/vip', 'VipController@create');
Route::post('/update/vip/{id}', 'VipController@update');
Route::post('/store/vip', 'VipController@store');
Route::get('/edit/vip/{id}', 'VipController@edit');

//Delivery
Route::get('/create/delivery', 'DeliveryController@create');
Route::post('/update/delivery/{id}', 'DeliveryController@update');
Route::post('/store/delivery', 'DeliveryController@store');
Route::get('/edit/delivery/{id}', 'DeliveryController@edit');

//Size
Route::get('/create/size', 'SizeController@create');
Route::post('/update/size/{id}', 'SizeController@update');
Route::post('/store/size', 'SizeController@store');
Route::get('/edit/size/{id}', 'SizeController@edit');

//Pages
Route::get('/about-us', function(){
    return view('about-us');
});
