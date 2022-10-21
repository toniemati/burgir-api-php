<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name' => 'Burgery',
            'description' => 'Przepyszne hamburgery'
        ]);

        \App\Models\Category::create([
            'name' => 'Dodatki',
            'description' => 'Najlepsze dodatki'
        ]);

        \App\Models\Category::create([
            'name' => 'Sosy',
            'description' => 'Sosy jakich jeszcze nie jadłeś'
        ]);

        \App\Models\Category::create([
            'name' => 'Napoje',
            'description' => 'Orzeźwiające napoje'
        ]);
    }
}
