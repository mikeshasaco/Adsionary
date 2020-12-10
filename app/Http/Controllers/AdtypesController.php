<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Adtype;
use Illuminate\Http\Request;

class AdtypesController extends Controller
{
    public function create()
    {
        return view('ads.createadtype');
    }

    public function store(Request $request)
    {
        $industry = new Adtype;
        $industry->adtypename = $request->adtypename;

        $industry->save();

        return redirect::back();
    }
}
