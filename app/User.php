<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    // user คนนึง โพสได้หลายข่าว 
    public function stories() {
        return $this->hasMany(Story::class);
    }

    // user คนนึง โพสได้หลายโพส(รูปในgallery) 
    public function posts() {
        return $this->hasMany(Post::class);
    }

    // user คนนึง โพส guide ได้หลายโพส
    public function guides() {
        return $this->hasMany(Guide::class);
    }

    //user 1 คน มีการแจ้งเตือนได้หลายการแจ้งเตือน
    public function notifications() {
        return $this->hasMany(Notification::class);
    }
}
