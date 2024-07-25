<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promote>
 */
class PromoteFactory extends Factory
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
            'description' =>fake()->paragraph(),
            'start_date' =>fake()->date(),
            'end_date' =>fake()->date(),
            'discount' =>fake()->numberBetween(5, 50),
            'is_active' =>fake()->boolean(),
            'product_id' => Product::factory(),
        ];
    }
}
