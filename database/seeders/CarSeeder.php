<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Car::create([
            'plates' => 'STA 12345',
            'bussy' => false,
            'mileage' => 150000
        ]);

        \App\Models\Car::create([
            'plates' => 'SY 12345',
            'bussy' => false,
            'mileage' => 150000
        ]);

        \App\Models\Car::create([
            'plates' => 'SK 12345',
            'bussy' => false,
            'mileage' => 150000
        ]);
    }
}
