<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 50; $i++) {
            Movie::create([
                'title' => $faker->realText(30, 2),
                'released' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}
