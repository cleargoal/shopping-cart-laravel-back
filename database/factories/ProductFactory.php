<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => 0,
            'title' => '',
            'code' => Str::random(9),
            'slug' => '',
            "description" => "Product Description",
            'image' => '',
            'price' => rand(2, 111),
            "quantity" => rand(0, 50),
            "rating" => rand(1,5),
        ];
    }
}
