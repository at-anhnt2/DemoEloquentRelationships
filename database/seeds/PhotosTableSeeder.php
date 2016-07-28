<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
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
            Photo::create([
                'file_path' => 'image/default.png',
                'imageable_id' => rand(1, 10),
                'imageable_type' => rand(0, 1) ? App\Profile::class : App\Movie::class
            ]);
        }
    }
}
