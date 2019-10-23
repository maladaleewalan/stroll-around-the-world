<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Region extends Model
{
    use SoftDeletes;

    //1 region มี 1 ประเทศ
    public function country() {
        return $this->belongsTo(Region::class);
    }

    //1 region มีได้หลาย guide
    public function guides() {
        return $this->hasMany(Guide::class);
    }

}
