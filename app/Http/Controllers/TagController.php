<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Tag;
class TagController extends Controller
{
    public function create()
    {
        return view('ads.createtag');
    }


    public function store(Request $request)
    {

        $tag = new Tag;
        $tag->tagname = $request->tagname;
        $tag->save();

        return Redirect::back();
    }
}
