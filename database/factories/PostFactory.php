<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'post_title' => $this->faker->word,
            'short_descr' => $this->faker->sentence,
            'description' => $this->faker->text(150),
            'published' => $this->faker->boolean,
            'owner_id' => 1 //User::find(rand(2, 5))
        ];
    }
}
