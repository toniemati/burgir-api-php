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
            CustomerSeeder::class, //* add customers
            EmployeeSeeder::class, //* add employees
            OrderSeeder::class, //* add orders
            DeliverySeeder::class, //* add deliveries
            OrderProductSeeder::class, //* add order_product relation
        ]);

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@email.com',
        ]);
    }
}
