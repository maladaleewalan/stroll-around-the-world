<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postlike extends Model
{
    protected $fillable = [
        'post_id', 'user_id'
    ];
}
