<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //dd($products->where('type_id', '=', 4));
        return view('welcome', [
            'flowers' => $products->where('type_id', '=', 3),
            'boxes' => $products->where('type_id', '=', 4),
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice]);
    }

    public function getCart()
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('korzina', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice]);
    }

    public function contact()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('contacts', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice]);
    }

    public function vigvams()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('vigvams', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice]);
    }

    public function about()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('about-us', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice]);
    }

    public function order()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('order', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice]);
    }
}


