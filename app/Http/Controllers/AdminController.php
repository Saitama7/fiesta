<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Delivery;
use App\OrderTime;
use App\Product;
use App\Size;
use App\Type;
use App\Vip;
use App\Vid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {

        if (Auth::check()) {
            // The user is logged in...
            return view('admin', [
                'baskets' => Basket::all(),
                'deliveries' => Delivery::all(),
                'products' => Product::all(),
                'sizes' => Size::all(),
                'types' => Type::all(),
                'vips' => Vip::all(),
                'order_times' => OrderTime::all(),
                'vids' => Vid::all(),
            ]);
        }else {
            return $redirectTo = '/login';
        }

    }
}
