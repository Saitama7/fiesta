<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baskets = Basket::all();
        return view('all.basket', ['baskets' => $baskets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.basket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $basket = new Basket();

        $basket->delivery_id = $request->delivery_id;
        $basket->vip_id = $request->vip_id;
        $basket->name = $request->name;
        $basket->city = $request->city;
        $basket->street = $request->street;
        $basket->house = $request->house;
        $basket->phone_number = $request->phone_number;
        $basket->order_date = $request->order_date;
        $basket->order_time = $request->order_time;
        $basket->sign = $request->sign;

        $basket->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show($basketId)
    {
        $basket = Basket::find($basketId);
        return view('show.basket', ['basket' => $basketId]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit($basketId)
    {
        $basket = Basket::find($basketId);

        return view('edit.basket', ['basket' => $basket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $basketId)
    {
        if ($request) {
            $basket = Basket::find($basketId);
            if ($request->name) {
                $basket->name = $request->name;
            }
            if ($request->delivery_id) {
                $basket->delivery_id = $request->delivery_id;
            }
            if ($request->vip_id) {
                $basket->vip_id = $request->vip_id;
            }
            if ($request->city) {
                $basket->city = $request->city;
            }
            if ($request->street) {
                $basket->street = $request->street;
            }
            if ($request->house) {
                $basket->house = $request->house;
            }
            if ($request->order_date) {
                $basket->order_date = $request->order_date;
            }
            if ($request->order_time) {
                $basket->order_time = $request->order_time;
            }
            if ($request->phone_number) {
                $basket->phone_number = $request->phone_number;
            }
            if ($request->sign) {
                $basket->sign = $request->sign  ;
            }



            $basket->save();
        }



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy($basketId)
    {
        $basket = Basket::find($basketId);
        $basketId->delete();
        return redirect()->back();
    }
}
