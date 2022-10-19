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
            'name' => $this->faker->randomElement(['Drwal', 'Royal', 'Wieśmac', 'Cheeseburger', 'Hamburger', 'Chicker', 'Góral', 'Mutant', 'Koks', 'Coca-cola', 'Frytki', 'Sos czosnkowy', 'Sos ostry', 'Musztarda', 'Ice-tea', 'Sprite', 'Herbata', 'Kawa']),
            'description' => 'opis produktu',
            'price' => $this->faker->randomFloat(2, 10, 50),
            'category_id' => fn () => \App\Models\Category::inRandomOrder()->first()->id,
        ];
    }
}
