<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'User 1',
                'email' => 'user1@test.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'User 2',
                'email' => 'user2@test.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'User 3',
                'email' => 'user3@test.com',
                'password' => bcrypt('password'),

            ],

            [
                'name' => 'User 4',
                'email' => 'user4@test.com',
                'password' => bcrypt('password'),

            ],

            [
                'name' => 'User 5',
                'email' => 'user5@test.com',
                'password' => bcrypt('password'),

            ],

            [
                'name' => 'User 6',
                'email' => 'user6@test.com',
                'password' => bcrypt('password'),

            ],
        ];

        User::insert($user);
    }
}
