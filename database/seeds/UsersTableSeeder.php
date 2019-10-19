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
        $user->save();


        $user = new User;
        $user->password = Hash::make('Immmmmmm');
        $user->name = "Thanapass";
        $user->email = "thanapass.p@hotmail.com";
        $user->role = "admin";
        $user->picture = "im.jpg";
        $user->save();

        $user = new User;
        $user->password = Hash::make('userdemo');
        $user->name = "UserDemo";
        $user->email = "userdemo@hotmail.com";
        $user->picture = "2_2936_0130.jpg";
        $user->save();
    }
}
