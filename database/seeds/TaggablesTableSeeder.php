<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Taggable;
class TaggablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Tag::all()->each(function($tag) use ($faker) {
            $amount = rand(10, 20);
            for ($i = 0; $i < $amount; $i++) {
                Taggable::create([
                    'tag_id' => $tag->id,
                    'taggable_id' => rand(1, 50),
                    'taggable_type' => rand(0, 1) ? 'App\Post' : 'App\Movie'
                ]);
            }
        });
    }
}
