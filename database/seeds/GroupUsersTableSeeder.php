<?php

use Illuminate\Database\Seeder;
use App\User;
use App\GroupUser;

class GroupUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user) {
            $num = rand(1, 3);
            for ($i = 1; $i <= $num; $i++) {
                GroupUser::create([
                    'user_id' => $user->id,
                    'group_id' => $i,
                ]);
            }
        });
    }
}
