<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(6, 10)),
            'slug'=>$this->faker->slug(mt_rand(4,8)),
            'category_id'=>mt_rand(1,3),
            'user_id'=>mt_rand(1,5),
            'mini_body'=>$this->faker->sentence(5),
            'body'=>$this->faker->paragraph(mt_rand(5,7))
        ];
    }
}
