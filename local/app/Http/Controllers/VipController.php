<?php

namespace App\Http\Controllers;

use App\Vip;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vips = Vip::all();
        return view('all.vip', ['vips' => $vips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.vip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vip= new Vip();

        $vip->name = $request->name;
        $vip->phone_number = $request->phone_number;
        $vip->address = $request->address;
        $vip->discount = $request->discount;
        $vip->save();

        return redirect()->back()->with('status', 'Уважаемый(ая), '.$request->name.', успешно добавлена в список VIP - клиентов!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Vip  $vip
     * @return \Illuminate\Http\Response
     */
    public function show($vipId)
    {
        $vip = Vip::find($vipId);
        return view('all.vip', ['vip' => $vip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vip  $vip
     * @return \Illuminate\Http\Response
     */
    public function edit($vipId)
    {
        $vip = Vip::find($vipId);

        return response()->json(['vip' => $vip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vip  $vip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request) {
            $vip = Vip::find($request->id);
            if ($request->name) {
                $vip->name = $request->name;
            }
            if ($request->phone_number) {
                $vip->phone_number = $request->phone_number;
            }
            if ($request->address) {
                $vip->address = $request->address;
            }
            if ($request->discount) {
                $vip->discount = $request->discount;
            }
            $vip->save();
        }



        return redirect()->back()->with('status', 'Изменения успешно сохранены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vip  $vip
     * @return \Illuminate\Http\Response
     */
    public function destroy($vipId)
    {
        $vip= Vip::find($vipId);
        $vip->delete();
        return redirect()->back();
    }

    public function validatevip(Request $request) {
        $vip = Vip::all()->where('vip_id', '=', $request->id)->first();
        $flag = false;
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        if (Session::has('vip')){
            Session::remove('vip');
            Session::get('cart')->totalPrice = $cart->realPrice;
        }

        if (is_numeric($request->name)) {
            if ($vip->phone_number == $request->name)
                $flag = true;
        }
        else {
            if (mb_strtoupper($vip->name) == mb_strtoupper($request->name))
                $flag = true;
        }

        if ($flag) {
            Session::put('vip', $vip);
        }

        if (Session::get('vip')){
             Session::get('cart')->totalPrice = Session::get('cart')->totalPrice - (Session::get('cart')->totalPrice / 100) * $vip->discount;
        }
        return response()->json([
           'flag' => $flag,
            'vip' => $vip,
            'totalPrice' => $cart->totalPrice,
            'realPrice' => $cart->realPrice
        ]);
    }

    public function novipcart(Request $request){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        if (Session::has('vip')){
            Session::remove('vip');
            Session::get('cart')->totalPrice = $cart->realPrice;
        }

        return redirect('/order');
    }


}
