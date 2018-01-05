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

Route::get('/email', function () {
   return view('emails.email-shipped', [
       'order' => \App\Basket::all()->last(),
   ]);
});


//Cart
Route::get('/getcart', 'IndexController@getCart');
Route::get('/','IndexController@index');
Route::get('/session','IndexController@session');

Route::get('/api/add-to-cart/{id}', 'ProductController@apiGetAddToCart')->name('product.index'); // ADD

Route::get('/remove-from-cart/{id}', 'ProductController@removeFromCart'); //Remove 1 item From Cart
Route::get('/delete-from-cart/{id}', 'ProductController@deleteFromCart'); //Delete items from Cart

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart'); // ADD
Route::get('/api/cart', 'IndexController@apiGetCart');
Route::get('/more/products/{id}', 'BasketController@more');
Route::get('/itogo', 'IndexController@itogo');

Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::group(['middleware' => ['admin']],function() {

    Route::get('/admin', 'AdminController@index');
});

//Product
Route::get('/create/product', 'ProductController@create');
Route::post('/store/product', 'ProductController@store');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/update/product', 'ProductController@update');
Route::get('/delete/product/{id}', 'ProductController@destroy');

//Type
Route::get('/create/type', 'TypeController@create');
Route::post('/update/type', 'TypeController@update');
Route::post('/store/type', 'TypeController@store');
Route::get('/edit/type/{id}', 'TypeController@edit');
Route::get('/delete/type/{id}', 'TypeController@destroy');

//Vip
Route::get('/create/vip', 'VipController@create');
Route::post('/update/vip', 'VipController@update');
Route::post('/store/vip', 'VipController@store');
Route::get('/edit/vip/{id}', 'VipController@edit');
Route::get('/delete/vip/{id}', 'VipController@destroy');
Route::get('/validatevip', 'VipController@validatevip');
Route::get('/novipcart', 'VipController@novipcart');
Route::get('/show/{id}', 'VipController@show');


//Delivery
Route::get('/create/delivery', 'DeliveryController@create');
Route::post('/update/delivery', 'DeliveryController@update');
Route::post('/store/delivery', 'DeliveryController@store');
Route::get('/edit/delivery/{id}', 'DeliveryController@edit');
Route::get('/delete/delivery/{id}', 'DeliveryController@destroy');

//Size
Route::get('/create/size', 'SizeController@create');
Route::post('/update/size', 'SizeController@update');
Route::post('/store/size', 'SizeController@store');
Route::get('/edit/size/{id}', 'SizeController@edit');
Route::get('/delete/size/{id}', 'SizeController@destroy');

//Vid
Route::get('/create/vid', 'VidController@create');
Route::post('/update/vid', 'VidController@update');
Route::post('/store/vid', 'VidController@store');
Route::get('/edit/vid/{id}', 'VidController@edit');
Route::get('/delete/vid/{id}', 'VidController@destroy');

//Interval
Route::get('/create/time', 'TimeController@create');
Route::post('/update/time', 'TimeController@update');
Route::post('/store/time', 'TimeController@store');
Route::get('/edit/time/{id}', 'TimeController@edit');
Route::get('/delete/time/{id}', 'TimeController@destroy');

//Baskets
Route::get('/create/basket', 'BasketController@create');
Route::post('/update/basket', 'BasketController@update');
Route::post('/store/basket', 'BasketController@store');
Route::get('/edit/basket/{id}', 'BasketController@edit');
Route::get('/delete/basket/{id}', 'BasketController@destroy');
Route::post('toggledeliver/{id}', 'BasketController@toggledeliver')->name('toggle.deliver');
//Apps
Route::get('/create/app', 'AppController@create');
Route::post('/update/app', 'AppController@update');
Route::post('/store/app', 'AppController@store');
Route::get('/edit/app/{id}', 'AppController@edit');
Route::get('/delete/app/{id}', 'AppController@destroy');

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
