<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Session;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Adtype;
use App\Models\Industry;
use App\Models\Tag;
use App\Models\Percentage;
use App\Models\Social;
use Illuminate\Support\Facades\Storage;
class AdsController extends Controller
{
    public function create()
    {

        $adtype = Adtype::get();
        $industries =Industry::get();
        $tags = Tag::get();
        $percentages = Percentage::get();
        $socials = Social::get();

        // dd($adtype);
        return view('ads.create', compact('adtype', 'industries', 'tags', 'percentages','socials'));
    }

    public function store(Request $request)
    {
        $formInput = $request->except('image');

        $this->validate($request, [
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:10000|required',
        ]);


        $ad = new Ad;
        $ad->primary = $request->primary;
        $ad->company = $request->company;
        $ad->adtype_id =  $request->adtype_id;
        $ad->industry_id = $request->industry_id;
        $ad->percentage_id = $request->percentage_id;
        $ad->social_id = $request->social_id;

        // if ($request->hasFile('image')) {

        //     $image = $request->file('image');
        //     $filename = 'dataimage/' . time() . '.' . $image->getClientOriginalExtension();
        //     $o = Image::make($image)->orientate();
        //     $path = Storage::disk('do')->put('Adsionary/' . $filename, $o->encode());
        //     $ad->image = $filename;
        // }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $ad->image = $filename;
        }

        $ad->save();

        $ad->tags()->sync($request->tags, false);
        return redirect::back();
    }

    public function index()
    {
        $ads = Ad::join('industries', 'industries.id', 'ads.industry_id')
            ->join('adtypes', 'adtypes.id', 'ads.adtype_id')
            ->join('socials', 'socials.id', 'ads.social_id')

            ->leftjoin('percentages', 'percentages.id', 'ads.percentage_id')
            ->select('ads.*', 'industries.industryname', 'adtypes.adtypename', 'percentages.percentnumber','socials.socialmedia')
            ->get();

        // $ads = Ad::all();
            // dd($ads);
        return view('ads.index',compact('ads'));
    }

    public function allindustry()
    {
        $industry = Ad::join('industries', 'industries.id', 'ads.industry_id')
            ->join('adtypes', 'adtypes.id', 'ads.adtype_id')
            ->Select('ads.adtype_id', DB::raw('count(*) *100 /(select count(*) from ads) as total'), 'adtypes.adtypename')
            ->groupBy('adtype_id', 'adtypename')
            ->get();
        // dd($industry);
            return view('ads.allindustry', compact('industry'));

    }

    public function industrydata($id)
    {
        $industryid =Industry::where('id', $id)->firstorFail();

        $int = Industry::orderBy('industryname', 'ASC')->get();

        session()->put('industryname', $industryid->id);

        $intantype = Ad::
                    join('industries', 'industries.id', 'ads.industry_id')
                    ->join('adtypes', 'adtypes.id', 'ads.adtype_id')
            ->where('ads.industry_id', $id)
                    ->Select('ads.adtype_id',DB::raw('count(*) *100 /(select count(*) from ads where ads.industry_id = industries.id) as total'), 'adtypes.adtypename')
                    ->groupBy('adtype_id','industry_id', 'industries.id','adtypename')
                    ->get();

        // $number = Ad::where('ads.industry_id', $id)->select('ads.adtype_id')

            // dd($intantype);
                // ->select('option',DB::raw('count(*) *100 / (select count(*) from answers) as count'))



        return view('ads.data',compact('industryid', 'int', 'intantype'));

    }

    public function allpercent()
    {
        $percent =
        Ad::join('industries', 'industries.id', 'ads.industry_id')
        ->rightjoin('percentages', 'percentages.id', 'ads.percentage_id')
        ->Select('ads.percentage_id', DB::raw('count(*) *100 /(select count(*) from ads) as total'), 'percentages.percentnumber')
        ->groupBy('percentage_id', 'percentnumber')
        ->get();

        // dd($industry);
        return view('ads.allpercent', compact('percent'));

    }

    public function industrypercent($id)
    {
        $industryid = Industry::where('id', $id)->firstorFail();

        $int = Industry::orderBy('industryname', 'ASC')->get();

        session()->put('industryname', $industryid->id);

        $intantype = Ad::join('industries', 'industries.id', 'ads.industry_id')
            ->rightjoin('percentages', 'percentages.id', 'ads.percentage_id')
            ->where('ads.industry_id', $id)
            ->Select('ads.percentage_id', DB::raw('count(*) *100 /(select count(*) from ads where ads.industry_id = industries.id) as total'), 'percentages.percentnumber', 'industryname')
            ->groupBy('percentage_id', 'industry_id', 'industries.id', 'percentnumber', 'industryname')
            ->get();

        // dd($intantype);

        return view('ads.industrypercent', compact('industryid', 'int', 'intantype'));
    }

    // public function allcolor()
    // {

    //     $colors = Ad::join('industries', 'industries.id', 'ads.industry_id')
    //     ->rightjoin('colors', 'colors.id', 'ads.color_id')
    //         ->Select('ads.color_id', DB::raw('count(*) *100 /(select count(*) from ads) as total'), 'colors.colorname')
    //         ->groupBy('color_id', 'colorname')
    //         ->get();


    //     // dd($colors);
    //     return view('ads.allcolor',compact('colors'));
    // }


    // public function industrycolor($id)
    // {
    //     $industryid = Industry::where('id', $id)->firstorFail();

    //     $int = Industry::orderBy('industryname', 'ASC')->get();

    //     session()->put('industryname', $industryid->id);

    //     $intantype = Ad::join('industries', 'industries.id', 'ads.industry_id')
    //     ->rightjoin('colors', 'colors.id', 'ads.color_id')
    //     ->where('ads.industry_id', $id)
    //         ->Select('ads.color_id', DB::raw('count(*) *100 /(select count(*) from ads where ads.industry_id = industries.id) as total'), 'colors.colorname', 'industryname')
    //         ->groupBy('color_id', 'industry_id', 'industries.id', 'colorname', 'industryname')
    //         ->get();

    //     return view('ads.industrycolor', compact('industryid', 'int', 'intantype'));


    // }

    public function allsocial()
    {
        $social = Ad::join('industries', 'industries.id', 'ads.industry_id')
        ->join('socials', 'socials.id', 'ads.social_id')
            ->Select('ads.social_id', DB::raw('count(*) *100 /(select count(*) from ads) as total'), 'socials.socialmedia')
            ->groupBy('social_id', 'socialmedia')
            ->get();

        return view('ads.allsocial', compact('social'));
    }

    public function industrysocial($id)
    {
        $industryid = Industry::where('id', $id)->firstorFail();

        $int = Industry::orderBy('industryname', 'ASC')->get();

        session()->put('industryname', $industryid->id);

        $intantype = Ad::join('industries', 'industries.id', 'ads.industry_id')
        ->join('socials', 'socials.id', 'ads.social_id')
        ->where('ads.industry_id', $id)
            ->Select('ads.social_id', DB::raw('count(*) *100 /(select count(*) from ads where ads.industry_id = industries.id) as total'), 'socials.socialmedia', 'industryname')
            ->groupBy('social_id', 'industry_id', 'industries.id', 'socialmedia', 'industryname')
            ->get();

        return view('ads.industrysocial', compact('industryid', 'int', 'intantype'));

    }

}
