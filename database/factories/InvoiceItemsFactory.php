<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItems>
 */
class InvoiceItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "invoice_id" => fake()->numberBetween(10, 1000),
            "product_id" => fake()->numberBetween(10, 100),
            "unite_price" => fake()->numberBetween(10, 500),
            "quantity" => fake()->numberBetween(1, 5),
        ];
    }
}
