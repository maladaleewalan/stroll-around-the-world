<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //1 การแจ้งเตือน เป็นของ user 1 คน
    public function user() {
        return $this->belongsTo(User::class);
    }
}
