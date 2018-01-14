<?php

namespace App\Http\Controllers;

use App\Banket;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BanketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankets = Banket::all();
        return view('corporative-clients', ['bankets' => $bankets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.banket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banket = new Banket();

        if ($request->hasFile('path')) {
            $img = $request->file('path');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(1080, 1080)->save('uploads/bankets/' . $filename );
            $banket->path = $filename;
        }
        $banket->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show($banketId)
    {
        $banket = Banket::find($banketId);
        return view('all.banket', ['banket' => $banket]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($banketId)
    {
        $banket = Banket::find($banketId);
        $banket->delete();
        return redirect()->back();
    }
}
