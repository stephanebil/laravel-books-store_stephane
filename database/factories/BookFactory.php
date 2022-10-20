<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake()->sentence(),
            'description' => fake()-> paragraph(10),
            'image' => "https://source.unsplash.com/random/640×480",
            'price' => fake()->randomFloat(1, 5, 50),
            'author' => fake()->name(),
            'nombre_pages' => fake()->numberBetween(0, 500),
            'created_at' => now(),
        ];
    }
}
