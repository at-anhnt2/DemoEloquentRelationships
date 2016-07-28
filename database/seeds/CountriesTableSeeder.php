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
        $faker = Faker\Factory::create();
        for ($i=0; $i < 5; $i++) {
            Country::create([
                'name' => $faker->country,
                'code' => $faker->postcode
            ]);
        }
    }
}
