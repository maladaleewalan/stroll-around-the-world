<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //1 region มี country เดียว
    public function country(){
        return $this->belongsTo(Country::class);
    }

    
    //1 region มี หลาย guide
    public function guides(){
        return $this->hasMany(Guide::class);
    }
}
