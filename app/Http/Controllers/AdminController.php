<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Delivery;
use App\Product;
use App\Size;
use App\Type;
use App\Vip;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        return view('admin', [
            'baskets' => Basket::all(),
            'deliveries' => Delivery::all(),
            'products' => Product::all(),
            'sizes' => Size::all(),
            'types' => Type::all(),
            'vips' => Vip::all(),
        ]);
    }
}
