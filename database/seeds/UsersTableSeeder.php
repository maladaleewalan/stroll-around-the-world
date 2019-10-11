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
        $user->username = "gamyuimalada";
        $user->password = Hash::make('gam3542');
        $user->firstname = "Malada";
        $user->lastname = "leewalan";
        $user->email = "gam3542@hotmail.com";
        $user->role = "admin";
        $user->picture = "gam.jpg";
        $user->save();


        $user = new User;
        $user->username = "MynameisImm";
        $user->password = Hash::make('Immmmmmm');
        $user->firstname = "Thanapass";
        $user->lastname = "pungsub";
        $user->email = "thanapass.p@hotmail.com";
        $user->role = "admin";
        $user->picture = "im.jpg";
        $user->save();

       
    }
}
