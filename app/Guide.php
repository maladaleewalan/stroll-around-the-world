<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guide extends Model
{
    use SoftDeletes;

    //1 guide มีคนโพสคนเดียว
    public function user() {
        return $this->belongsTo(User::class);
    }

    //1 guide มี 1 region
    public function region() {
        return $this->belongsTo(Region::class);
    }

  


}

