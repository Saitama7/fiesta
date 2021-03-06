<?php

namespace App\Http\Controllers;

use App\App;
use App\Cart;
use App\Product;
use App\Size;
use App\Vip;
use App\Vid;
use Carbon\Carbon;
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
        $product->vid_id = $request->vid_id;
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

        return redirect()->back()->with('status', 'Успешно добавлен новый товар: '.$request->name);
    }

    public function flowers() {
        $products = Product::all()->where('type_id', '=', 3);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();
        $sizes = Size::all();

        return view('all.flowers', [
            'sizes' => $sizes,
            'tproducts' => $products,
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'vids' => Vid::all(),
            'apps' => $apps->where('id', '=', 1)
        ]);
    }

    public function boxes() {
        $products = Product::all()->where('type_id', '=', 4);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('all.boxes', [
            'tproducts' => $products,
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)
        ]);
    }

    public function vigvams() {
        $products = Product::all()->where('type_id', '=', 6);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $apps = App::all();

        return view('all.vigvams', [
            'tproducts' => $products,
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice,
            'apps' => $apps->where('id', '=', 1)
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

        return response()->json(['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request) {
            $product = Product::find($request->id);
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
            if ($request->vid_id) {
                $product->vid_id = $request->vid_id;
            }
            if ($request->status) {
                if ($request->status == 'on') {
                    $product->status = 1;
                }else {
                    $product->status = 0;
                }

            }
            if ($request->slide_status) {
                if ($request->slide_status == 'on') {
                    $product->slide_status = 1;
                }else {
                    $product->slide_status = 0;
                }
            }
            if ($request->image_path) {
                if ($request->hasFile('image_path')) {
                    $avatar = $request->file('image_path');
                    $filename = time() . '.' . $avatar->getClientOriginalExtension();
                    Image::make($avatar)->resize(400, 400)->save('uploads/products/' . $filename );
                    //$avatar->move(public_path().'uploads/products/', $filename);
                    $product->image_path = $filename;
                }
            }
            if ($request->cost) {
                $product->cost = $request->cost;
            }

            $product->save();
        }



        return redirect()->back()->with('status', 'Изменения успешно сохранены!');
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

    public function apiGetAddToCart(Request $request, $id)
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
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $product = $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //add($request->session()->get('cart'));
//        return redirect()->route('product.index');


        return redirect()->back()->with([
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

        return redirect()->back()->with([
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);

    }

    public function deleteFromCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($product, $product->id);
        $request->session()->put('cart', $cart);

        return redirect()->back()->with([
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);

    }
}
