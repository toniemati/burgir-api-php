<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customers_count = \App\Models\Customer::count();

        return [
            'order_date' => $this->faker->dateTimeThisYear(),
            'customer_id' => $this->faker->numberBetween(1, $customers_count)
        ];
    }
}
