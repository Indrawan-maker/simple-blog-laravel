<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use PharIo\Manifest\Author;

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
            'slug' => Str::slug(fake()->sentence(10)),
            'title' => fake()->sentence(12),
            'author_id' => User::factory(),
            'gambar' => fake()->imageUrl(640, 480, 'business'),
            'detail_gambar' => fake()->realText(3000),
            'body' => fake()->paragraphs(5, true),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now')
        ];
    }
}
