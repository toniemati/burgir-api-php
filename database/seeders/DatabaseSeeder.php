<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //todo php artisan migrate:fresh --seed

        $this->call([
            CategorySeeder::class, //* add categories
            ProductSeeder::class, //* add products
            IngredientSeeder::class, //* add ingredients
            IngredientProductSeeder::class, //* add ingredient_product relation,
            CarSeeder::class, //* add cars
            CustomerSeeder::class, //*add customers
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
