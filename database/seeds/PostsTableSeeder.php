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
        $post = new Post;
        $post->detail = "Dinosaur";
        $post->picture = "3-21.jpg";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->detail = "The first temple that I visited in Bangkok";
        $post->picture = "3-1-1.jpg";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->detail = "หมอกจางๆ และ ควัน";
        $post->picture = "Kew-Mae-Pan.jpg";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->detail = "Good morning";
        $post->picture = "oqabqeebhFfGVk64248-o.jpg";
        $post->user_id = 2;
        $post->save();

        

        $post = new Post;
        $post->detail = "Train....";
        $post->picture = "_MG_5418.jpg";
        $post->user_id = 2;
        $post->save();

      
        
        
        


        // factory(Post::class,20)->create();  

      


    }
}