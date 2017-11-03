<?php

namespace App\Http\Controllers;

use App\Vip;
use Illuminate\Http\Request;

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

        return redirect()->back();
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

        return view('edit.vip', ['vip' => $vip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vip  $vip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vipId)
    {
        if ($request) {
            $vip = Vip::find($vipId);
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



        return redirect()->back();
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
}
