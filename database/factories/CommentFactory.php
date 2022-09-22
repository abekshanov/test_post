<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_ids = User::pluck('id')->toArray();
        return [
            'name' => fake()->name(),
            'post_id' => Post::factory(),
            'message' => fake()->text,
            'author_id' => User::find($user_ids[array_rand($user_ids)]),
        ];
    }
}
