<?php

use Illuminate\Database\Seeder;
use App\User;

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->password = Hash::make('gam3542');
        $user->name = "Malada";
        $user->email = "gam3542@hotmail.com";
        $user->role = "admin";
        $user->picture = "gam.jpg";
        $user->email_verified_at = now();
        $user->save();


        $user = new User;
        $user->password = Hash::make('Immmmmmm');
        $user->name = "Thanapass";
        $user->email = "thanapass.p@hotmail.com";
        $user->role = "admin";
        $user->picture = "im.jpg";
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('userdemo');
        $user->name = "UserDemo";
        $user->email = "userdemo@hotmail.com";
        $user->picture = "img_5da33146b4ffd.jpg";
        $user->role = "user1";
        $user->email_verified_at = now();
        $user->save();
    }
}
