<?php

use Illuminate\Database\Seeder;
use App\Region;
use App\Country;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = new Region;
        $region->name="Northern";
        $region->country_id=1;
        $region->save();

        $region = new Region;
        $region->name="Northeastern";
        $region->country_id=1;
        $region->save();

        $region = new Region;
        $region->name="Western";
        $region->country_id=1;
        $region->save();

        $region = new Region;
        $region->name="Central";
        $region->country_id=1;
        $region->save();

        $region = new Region;
        $region->name="Eastern";
        $region->country_id=1;
        $region->save();

        $region = new Region;
        $region->name="Southern";
        $region->country_id=1;
        $region->save();


    }
}
