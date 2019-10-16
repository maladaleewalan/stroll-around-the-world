<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //postนึง มี คนโพสคนเดียว
    public function user() {
        return $this->belongsTo(User::class);
    }
}
