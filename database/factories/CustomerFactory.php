<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $first_name = $this->faker->firstName();
        $last_name = $this->faker->lastName();

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'house_number' => $this->faker->buildingNumber(),
            'telephone' => $this->faker->phoneNumber(),
            'email' => strtolower($first_name . '.' . $last_name . '@' . $this->faker->freeEmailDomain()),
        ];
    }
}
