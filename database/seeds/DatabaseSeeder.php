<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(GroupUsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TaggablesTableSeeder::class);
    }
}
