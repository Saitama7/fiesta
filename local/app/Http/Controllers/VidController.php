<?php

namespace App\Http\Controllers;

use App\Vid;
use Illuminate\Http\Request;

class VidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vids = Vid::all();
        return view('all.vid', ['vid' => $vids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.vids');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vid = new Vid();

        $vid->name = $request->name;
        $vid->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show($vidId)
    {
        $vid = Vid::find($vidId);
        return view('show.vid', ['vid' => $vid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit($vidId)
    {
        $vid = Vid::find($vidId);

        return response()->json(['vid' => $vid]);
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
            $vid = Vid::find($request->id);
            if ($request->name) {
                $vid->name = $request->name;
            }

            $vid->save();
        }



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($vidId)
    {
        $vid = Vid::find($vidId);
        $vid->delete();
        return redirect()->back();
    }
}
