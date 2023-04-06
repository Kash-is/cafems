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
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'buying_price' => $this->faker->numberBetween(500,100),
            'price' => $this->faker->numberBetween(500,100),
            'image' => $this->faker->imageUrl(300,300),
            'quantity' => $this->faker->numberBetween(500,100)
        ];
    }
}
