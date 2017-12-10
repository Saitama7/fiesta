<?php

namespace App\Http\Controllers;

use App\OrderTime;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_times = OrderTime::all();
        return response()->json(['time' => $order_times]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.time');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = new OrderTime();

        $time->interval = $request->interval;
        $time->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show($timeId)
    {
        $time = OrderTime::find($timeId);
        return view('show.time', ['time' => $time]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit($timeId)
    {
        $time = OrderTime::find($timeId);

        return response()->json(['time' => $time]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request) {
            $time = OrderTime::find($request->id);
            if ($request->interval) {
                $time->interval = $request->interval;
            }

            $time->save();
        }



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($timeId)
    {
        $time = OrderTime::find($timeId);
        $time->delete();
        return redirect()->back();
    }
}
