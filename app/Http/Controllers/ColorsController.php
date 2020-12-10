<?php

namespace App\Http\Controllers;
use App\Models\Color;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function create()
    {
        return view('ads.createcolor');
    }

    public function store(Request $request)
    {
        $color = new Color;
        $color->colorname = $request->colorname;

        $color->save();

        return redirect::back();
    }
}
