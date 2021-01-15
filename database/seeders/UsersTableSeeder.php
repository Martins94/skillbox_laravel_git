<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()
            ->count(5)
            ->has(\App\Models\Post::factory()
                ->count(5), 'posts')
            ->create();
    }
}
