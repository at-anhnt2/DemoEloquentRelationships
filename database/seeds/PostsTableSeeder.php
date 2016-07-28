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
        $faker = Faker\Factory::create();
        for ($i=0; $i < 50; $i++) {
            Post::create([
                'title' => $faker->word,
                'user_id' => rand(1, 5),
                'body' => $faker->realText(255, 2),
                'created_at' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}
