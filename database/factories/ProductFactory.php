<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "ProductName" => fake()->name(),
            "ProductPrice" => fake()->randomNumber(7),
            "ProductImage" => fake()->image(),
            "CategoryId" => random_int(1, 5)
        ];
    }
}
