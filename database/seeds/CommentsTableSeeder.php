<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Post::all()->each(function($post) use ($faker) {
            $num = rand(10, 20);
            for ($i = 0; $i < $num; $i++) {
                Comment::create([
                'user_id' => rand(1, 50),
                'post_id' => $post->id,
                'body' => $faker->realText(255, 2)
                ]);
            }
        });

    }
}
