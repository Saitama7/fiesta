<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Session;
use function Sodium\add;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = App::all();
        return view('all.app', ['apps' => $apps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.app');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app= new App();

        if ($request->hasFile('logo_path')) {
            $logo = $request->file('logo_path');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(1000, 308)->save('uploads/logo/' . $filename );
            $app->logo_path = $filename;
        }

        if ($request->address) {
            $app->address = $request->address;
        }

        if ($request->hasFile('img_path')) {
            $banner = $request->file('img_path');
            $filename = time() . '.' . $banner->getClientOriginalExtension();
            Image::make($banner)->resize(1311, 400)->save('uploads/banners/' . $filename );
            $app->img_path = $filename;
        }
        if ($request->facebook) {
            $app->facebook = $request->facebook;
        }
        if ($request->instagram) {
            $app->instagram = $request->instagram;
        }
        if ($request->twitter) {
            $app->twitter = $request->twitter;
        }
        if ($request->odnoklassniki) {
            $app->odnoklassniki = $request->odnoklassniki;
        }
        if ($request->tel) {
            $app->tel = $request->tel;
        }
        if ($request->whatsapp) {
            $app->whatsapp = $request->whatsapp;
        }
        if ($request->telegram) {
            $app->telegram = $request->telegram;
        }
        if ($request->viber) {
            $app->viber = $request->viber;
        }
        if ($request->party) {
            $app->party = $request->party;
        }
        if ($request->pay) {
            $app->pay = $request->pay;
        }
        if ($request->deltext) {
            $app->deltext = $request->deltext;
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show($appId)
    {
        $app = App::find($appId);
        return view('all.app', ['app' => $app]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($appId)
    {
        $app = App::find($appId);

        return response()->json(['app' => $app]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request) {
            $app = App::find($request->id);

            if ($request->hasFile('logo_path')) {
                $logo = $request->file('logo_path');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                Image::make($logo)->resize(1000, 308)->save('uploads/logo/' . $filename );
                $app->logo_path = $filename;
            }
            if ($request->address) {
                $app->address = $request->address;
            }
            if ($request->hasFile('img_path')) {
                $banner = $request->file('img_path');
                $filename = time() . '.' . $banner->getClientOriginalExtension();
                Image::make($banner)->resize(1311, 400)->save('uploads/banners/' . $filename );
                $app->img_path = $filename;
            }
            if ($request->facebook) {
                $app->facebook = $request->facebook;
            }
            if ($request->instagram) {
                $app->instagram = $request->instagram;
            }
            if ($request->twitter) {
                $app->twitter = $request->twitter;
            }
            if ($request->odnoklassniki) {
                $app->odnoklassniki = $request->odnoklassniki;
            }
            if ($request->tel) {
                $app->tel = $request->tel;
            }
            if ($request->whatsapp) {
                $app->whatsapp = $request->whatsapp;
            }
            if ($request->telegram) {
                $app->telegram = $request->telegram;
            }
            if ($request->viber) {
                $app->viber = $request->viber;
            }
            if ($request->party) {
                $app->party = $request->party;
            }
            if ($request->pay) {
                $app->pay = $request->pay;
            }
            if ($request->deltext) {
                $app->deltext = $request->deltext;
            }
            $app->save();
        }



        return redirect()->back()->with('status', 'Настройки успешно сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($appId)
    {
        $app = App::find($appId);
        $app->delete();
        return redirect()->back();
    }
}
