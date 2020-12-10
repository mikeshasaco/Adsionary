<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'ad_tags');

    }

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry');
    }

    public function percentage()
    {
        $this->belongsTo('App\Models\Percentage');
    }


    public function adtype()
    {
        return $this->belongsTo('App\Models\Adtype');
    }

    public static function search($search)
    {

    //   return  Ad::join('industries', 'industries.id', 'ads.industry_id')
    //         ->where('company', 'like', '%'.$search.'%')
    //         ->orwhere('industryname', 'like', '%'.$search.'%');
        
        
        return  empty($search) ? static::query()
                : static::query()->where('company', 'like','%'.$search. '%' )
                ->orWhere('industryname','like', '%'.$search. '%' )
                ->orWhere('adtypename', 'like', '%' . $search . '%');

               
    }

    // public function scopeSearch($query, $val)
    // {
    //     return $query
    //         ->where('company', 'like', '%'.$val.'%');
    //         ;

    // }

    public function adTags()
    {
        return $this->hasMany('App\Models\Adtag');
    }
}
