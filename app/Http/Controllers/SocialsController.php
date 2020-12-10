<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Social;
class SocialsController extends Controller
{
    public function create()
    {
        return view('ads.createsocial');
    }

    public function store(Request $request)
    {
        $social = new Social;
        $social->socialmedia = $request->socialmedia;

        $social->save();

        return redirect::back();
    }
}
