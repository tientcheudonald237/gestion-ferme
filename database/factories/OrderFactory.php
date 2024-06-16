<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'current_stock' => $this->faker->numberBetween(0, 30),
            'order_stock' => $this->faker->numberBetween(50, 100),
            'id_product' => function () {
                return Product::factory()->create()->id;
            },
            'status' => $this->faker->randomElement(['potential', 'transmitted', 'in_progress', 'valid']),
        ];
    }
}
