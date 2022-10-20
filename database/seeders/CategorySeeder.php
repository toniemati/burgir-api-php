<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        (new \App\Models\Category([
            'name' => 'Burgery',
            'description' => 'Przepyszne hamburgery'
        ]))->save();

        (new \App\Models\Category([
            'name' => 'Dodatki',
            'description' => 'Najlepsze dodatki'
        ]))->save();

        (new \App\Models\Category([
            'name' => 'Sosy',
            'description' => 'Sosy jakich jeszcze nie jadłeś'
        ]))->save();

        (new \App\Models\Category([
            'name' => 'Napoje',
            'description' => 'Orzeźwiające napoje'
        ]))->save();
    }
}
