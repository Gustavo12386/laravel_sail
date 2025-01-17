<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Brand;
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
         'brand_id' => Brand::factory(),
         'category_id'  => Category::factory(),
         'name' => fake()->word(),
         'slug' => fake()->slug(),
         'description' => fake()->text(255),
         'is_featured' => fake()->boolean(),
        ];
    }
}
