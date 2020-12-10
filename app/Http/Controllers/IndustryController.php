<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Industry;
class IndustryController extends Controller
{
    public function create()
    {
        return view('ads.createindustry');
    }

    public function store(Request $request)
    {
        $industry = new Industry;
        $industry->industryname = $request->industryname;
        
        $industry->save();

        return redirect::back();

    }

}
