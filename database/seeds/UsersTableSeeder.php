<?php

use Illuminate\Database\Seeder;
use App\User;

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
        $user->username = "malada1167";
        $user->password = "gam3542";
        $user->firstname = "Malada";
        $user->lastname = "leewalan";
        $user->email = "gam3542@hotmail.com";
        $user->role = "admin";
        $user->save();


        $user = new User;
        $user->username = "thanapass0";
        $user->password = "imm1108";
        $user->firstname = "Thanapass";
        $user->lastname = "pungsub";
        $user->email = "thanapass.p@hotmail.com";
        $user->role = "admin";
        $user->save();

        $user = new User;
        $user->username = "somsri555";
        $user->password = "abcde";
        $user->firstname = "somsri";
        $user->lastname = "ja";
        $user->email = "somsri@hotmail.com";
        $user->role = "user1";
        $user->save();

       
    }
}
