<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model
{
    use SoftDeletes;
    
    //ข่าวนึง มี คนโพสคนเดียว
    public function user() {
        return $this->belongsTo(User::class);
    }

    //storyนึง มี country เดียว
    public function country() {
        return $this->belongsTo(Country::class);
    }
    
}
