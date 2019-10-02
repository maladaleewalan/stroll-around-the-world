<?php

use Illuminate\Database\Seeder;
use App\Story;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $story = new Story;
        // $story->title = "titleeee";
        // $story->detail = "detailll";
        // $story->save();

        factory(Story::class,20)->create();
    }
}
