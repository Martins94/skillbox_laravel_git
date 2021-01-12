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
        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        \App\Models\User::factory()
            ->count(5)
            ->has(\App\Models\Post::factory()
                ->count(5)
                ->has(\App\Models\Tag::factory()), 'posts')
                ->create()
            ->create();

    }
}
