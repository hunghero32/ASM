<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
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
            //
            'name' =>fake()->name(),
            'new_price' =>fake()->numberBetween(1000, 100000),
            'old_price' =>fake()->numberBetween(1000, 100000),
            'img' =>fake()->imageUrl(360, 360, 'products', true),
            'desc' =>fake()->paragraph(),
            'quantity' =>fake()->numberBetween(1, 100),
            'is_active' =>fake()->boolean(),
            'category_id' => Category::factory(),
        ];
    }
}
