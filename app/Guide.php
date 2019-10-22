<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    //1 guide มีคนโพสคนเดียว
    public function user() {
        return $this->belongsTo(User::class);
    }


}

