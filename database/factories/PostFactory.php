<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            "user_id" => mt_rand(1, 7),
            "category_id" => mt_rand(1, 4),
            "title" => fake()->sentence(mt_rand(2, 6)),
            "slug" => fake()->slug(),
            "excerpt" => fake()->paragraph(),
            // "published_at" => fake()->dateTime(),
            "body" => collect(fake()->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode("")
        ];
    }
}
