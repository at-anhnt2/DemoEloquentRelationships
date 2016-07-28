<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\User;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::all()->each(function ($user) use ($faker) {
            Profile::create([
                'user_id' => $user->id,
                'url' => $faker->url
            ]);
        });
    }
}
