<?php

namespace App\Http\Controllers;
use App\Models\Percentage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PercentageController extends Controller
{
    public function create()
    {
        return view('ads.createpercentage');
    }

    public function store(Request $request)
    {
        $percentage = new Percentage;
        $percentage->percentnumber = $request->percentnumber;

        $percentage->save();

        return redirect::back();
    }
}
