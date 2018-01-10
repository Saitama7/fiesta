<?php

namespace App\Http\Controllers;

use App\Cart;
use App\OrderTime;
use App\Product;
use App\App;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $apps = App::all();

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        //dd($products->where('type_id', '=', 4));
        return view('welcome', [
            'flowers' => $products->where('type_id', '=', 3),
            'boxes' => $products->where('type_id', '=', 4),
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)
            ]);
    }
    public function logo()
    {
        $apps = App::all();

        return view('app', [
            'apps' => $apps->where('id', '=', 1)
        ]);
    }
    public function apiGetCart() {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return response()->json([
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            ]);
    }

    public function itogo() {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return response()->json([
            'totalPrice' => $cart->totalPrice,
        ]);
    }

    public function session() {
        Session::remove('cart');
    }

    public function getCart() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();


        return view('korzina', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }

    public function about() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('about-us', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }

    public function vigvams() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('vigvams', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }

    public function contacts() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('contacts', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }

    public function order() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('order', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'realPrice' => $cart->realPrice,
            'order_times' => OrderTime::all(),
            'apps' => $apps->where('id', '=', 1)
            ]);
    }

    public function deliver() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('deliver', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }

    public function corpclient() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('corporative-clients', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }
    public function admin() {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('admin', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)]);
    }


}
