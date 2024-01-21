<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $hourly_pay = rand(10, 50);

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'title' => $this->faker->jobTitle(),
            'hire_date' => $this->faker->date('Y-m-d H:i:s'),
            'hourly_pay' => $hourly_pay,
            'salary' => $hourly_pay * 2080,
            'address' => $this->faker->address(),
        ];
    }
}
