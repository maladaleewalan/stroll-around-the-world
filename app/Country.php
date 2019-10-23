<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Country extends Model
{
    use SoftDeletes;

    //1country มีได้หลาย post
    public function posts() {
        return $this->hasMany(Post::class);
    }

    //1country มีได้หลาย story
    public function stories() {
        return $this->hasMany(Story::class);
    }

    //1country มีได้หลาย region
    public function regions() {
        return $this->hasMany(Region::class);
    }

   
}

