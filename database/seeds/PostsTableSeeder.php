<?php

use Illuminate\Database\Seeder;
use App\Post;
 
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,20)->create();    //ลองสร้าง user 1 คน

    }
}