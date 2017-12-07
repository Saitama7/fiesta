<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Session;
use function Sodium\add;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('all.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->size_id = $request->size_id;
        $product->type_id = $request->type_id;
        if ($request->hasFile('image_path')) {
            $avatar = $request->file('image_path');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(400, 400)->save('uploads/products/' . $filename );
            $product->image_path = $filename;

        }
        if ($request->status == 'on') {
            $product->status = 1;
        }else {
            $product->status = 0;
        }

        if ($request->slide_status == 'on') {
            $product->slide_status = 1;
        }else {
            $product->slide_status = 0;
        }

        $product->cost = $request->cost;

        $product->save();

        return redirect()->back();
    }

    public function flowers() {
        $products = Product::all()->where('type_id', '=', 3);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('all.products', [
            'tproducts' => $products,
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);
    }

    public function boxes() {
        $products = Product::all()->where('type_id', '=', 4);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('all.boxes', [
            'tproducts' => $products,
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('all.product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('edit.product', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request) {
            $product = Product::find($id);
            if ($request->name) {
                $product->name = $request->name;
            }
            if ($request->desc) {
                $product->desc = $request->desc;
            }
            if ($request->size_id) {
                $product->size_id = $request->size_id;
            }
            if ($request->type_id) {
                $product->type_id = $request->type_id;
            }
            if ($request->status) {
                $product->status = $request->status;
            }
            if ($request->slide_status) {
                $product->slide_status = $request->slide_status;
            }
            if ($request->image_path) {
                $product->image_path = $request->image_path;
            }
            if ($request->cost) {
                $product->cost = $request->cost;
            }

            $product->save();
        }



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $product = $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //add($request->session()->get('cart'));
//        return redirect()->route('product.index');


        return response()->json([
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);
    }


    public function removeFromCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();

    }

    public function deleteFromCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();

    }
}
