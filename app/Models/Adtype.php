<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adtype extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ads()
    {
        return $this->hasMany('App\Models\Ad');
    }
}
