<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    //1 guide มีคนโพสคนเดียว
    public function user() {
        return $this->belongsTo(User::class);
    }

    //1 guides มี region เดียว
    public function region(){
        return $this->belongsTo(Region::class);
    }

}

