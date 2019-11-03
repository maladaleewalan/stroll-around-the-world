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
        //Singapore
        $post = new Post;
        $post->detail = "sun shine";
        $post->picture = "singapore part02 1608-26.jpg";
        $post->user_id = 8;
        $post->country_id = 4;
        $post->save();

        //Korea
        $post = new Post;
        $post->detail = "love keys";
        $post->picture = "tPOOLba.jpg";
        $post->user_id = 4;
        $post->country_id = 2;
        $post->save();

        //Thailand
        $post = new Post;
        $post->detail = "Dinosaur";
        $post->picture = "3-21.jpg";
        $post->user_id = 3;
        $post->save();

        //Japan
        $post = new Post;
        $post->detail = "Micky and friends";
        $post->picture = "Tokyo-Disneyland.jpg";
        $post->user_id = 3;
        $post->country_id = 3;
        $post->save();

        //Singapore
        $post = new Post;
        $post->detail = "UNIVERSAL";
        $post->picture = "Universal-Ball-800x450.jpg";
        $post->user_id = 2;
        $post->country_id = 4;
        $post->save();

        //Japan
        $post = new Post;
        $post->detail = "Tokyo tower";
        $post->picture = "56339a3bec60adb92a8b45c3-2-full-ideas.jpg";
        $post->user_id = 2;
        $post->country_id = 3;
        $post->save();

        //Korea
        $post = new Post;
        $post->detail = "แฮดง ยงกุงซา";
        $post->picture = "วัดแฮดง-ยงกุงซา-เมืองปูซานเกาหลีใต้_800x464.jpg";
        $post->user_id = 6;
        $post->country_id = 2;
        $post->save();

        //Singapore
        $post = new Post;
        $post->detail = "สวยยยย";
        $post->picture = "changi-airport-rain-vortex.jpg";
        $post->user_id = 3;
        $post->country_id = 4;
        $post->save();

        //Korea
        $post = new Post;
        $post->detail = "ใบไม้ผลิใบ ที่เกาะนามิ";
        $post->picture = "1.nami-1.jpg";
        $post->user_id = 8;
        $post->country_id = 2;
        $post->save();

        //Japan
        $post = new Post;
        $post->detail = "shopping";
        $post->picture = "akihabara.jpg";
        $post->user_id = 2;
        $post->country_id = 3;
        $post->save();

        //Singapore
        $post = new Post;
        $post->detail = "Wonder Full Light and Water Show in Singapore";
        $post->picture = "Wonder-Full-Light-and-Water-Show-Singapore.jpg";
        $post->user_id = 7;
        $post->country_id = 4;
        $post->save();

        //Japan
        $post = new Post;
        $post->detail = "ฮอกไกโด :)";
        $post->picture = "hokkaido.jpg";
        $post->user_id = 6;
        $post->country_id = 3;
        $post->save();

        //Japan
        $post = new Post;
        $post->detail = "เช้านี้ ที่ 8 °C";
        $post->picture = "winter-Japan.jpg";
        $post->user_id = 2;
        $post->country_id = 3;
        $post->save();

        //Thailand
        $post = new Post;
        $post->detail = "The first temple that I visited in Bangkok";
        $post->picture = "3-1-1.jpg";
        $post->user_id = 7;
        $post->save();

        //Korea
        $post = new Post;
        $post->detail = "นั่งรถไฟ ชมดอกซากุระกัน";
        $post->picture = "CBb1YHn.jpg";
        $post->user_id = 2;
        $post->country_id = 2;
        $post->save();

        //Korea
        $post = new Post;
        $post->detail = "street food at Myeong-Dong";
        $post->picture = "koreanstreetfood55.jpg";
        $post->user_id = 8;
        $post->country_id = 2;
        $post->save();

        //Thailand
        $post = new Post;
        $post->detail = "หมอกจางๆ และ ควัน";
        $post->picture = "Kew-Mae-Pan.jpg";
        $post->user_id = 2;
        $post->save();

        //Thailand
        $post = new Post;
        $post->detail = "ชิงช้าต้นไม้ ชมวิวเนินมะปราง";
        $post->picture = "12190875_952803564765345_6344948201399877447_n.jpg";
        $post->user_id = 7;
        $post->save();

        //Singapore
        $post = new Post;
        $post->detail = "เจ้านก";
        $post->picture = "Jurong-Bird-Park-Singapore-e1519127978382-1280x720.jpg";
        $post->user_id = 2;
        $post->country_id = 4;
        $post->save();

        //Thailand
        $post = new Post;
        $post->detail = "Train....";
        $post->picture = "_MG_5418.jpg";
        $post->user_id = 2;
        $post->save();

        


      
        
        
        


        // factory(Post::class,20)->create();  

      


    }
}