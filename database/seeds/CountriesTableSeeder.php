<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country;
        $country->name="Thailand";
        $country->save();

        $country = new Country;
        $country->name="Korea";
        $country->save();

        $country = new Country;
        $country->name="Japan";
        $country->save();

        $country = new Country;
        $country->name="Italy";
        $country->save();
        
        $country = new Country;
        $country->name="Scotland";
        $country->save();
        
        $country = new Country;
        $country->name="Switzerland";
        $country->save();
    }
}
