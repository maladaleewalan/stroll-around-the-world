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
        $user->password = Hash::make('admin123');
        $user->name = "Administrator";
        $user->email = "admin123@hotmail.com";
        $user->role = "admin";
        $user->picture = "secreterial.png";
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('Immmmmmm');
        $user->name = "Thanapass";
        $user->email = "thanapass.p@hotmail.com";
        $user->role = "user2";
        $user->picture = "im.jpg";
        $user->point = 23;
        $user->totalpost = 13;
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('gam3542');
        $user->name = "Malada";
        $user->email = "gam3542@hotmail.com";
        $user->role = "user1";
        $user->picture = "gam.jpg";
        $user->point = 9;
        $user->totalpost = 5;
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('Pucca123');
        $user->name = "Pucca";
        $user->email = "Pucca123@hotmail.com";
        $user->picture = "20180502000640_0.jpg";
        $user->role = "user1";
        $user->point = 4;
        $user->totalpost = 2;
        $user->email_verified_at = now();
        $user->save();

       
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('pika123');
        $user->name = "Pikaaaa";
        $user->email = "pika123@hotmail.com";
        $user->picture = "31b3ab387d1763a986250fda640dedca.jpg";
        $user->role = "user1";
        $user->point = 6;
        $user->totalpost = 2;
        $user->email_verified_at = now();
        $user->save();
        
        $user = new User;
        $user->password = Hash::make('Pinky123');
        $user->name = "Pinky";
        $user->email = "pinky123@hotmail.com";
        $user->picture = "girl10.jpg";
        $user->role = "user2";
        $user->point = 11;
        $user->totalpost = 5;
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('Dora123');
        $user->name = "Doraaa";
        $user->email = "Dora123@hotmail.com";
        $user->picture = "dora1.png";
        $user->role = "user1";
        $user->point = 6;
        $user->totalpost = 4;
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('Minnie123');
        $user->name = "Minnie";
        $user->email = "Minnie123@hotmail.com";
        $user->picture = "blue-roommates-wall-decals-rmk1509gm-64_1000.jpg";
        $user->role = "user1";
        $user->point = 6;
        $user->totalpost = 4;
        $user->email_verified_at = now();
        $user->save();

        $user = new User;
        $user->password = Hash::make('userdemo');
        $user->name = "UserDemo";
        $user->email = "userdemo@hotmail.com";
        $user->picture = "img_5da33146b4ffd.jpg";
        $user->role = "user1";
        $user->save();
        

        
    }
}
