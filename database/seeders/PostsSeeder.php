<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Models\Post::all() as $posts) {
            $tags = \App\Models\Tag::inRandomOrder()->take(rand(1, 20))->pluck('id');
            $posts->tags()->attach($tags);
        }

    }
}
