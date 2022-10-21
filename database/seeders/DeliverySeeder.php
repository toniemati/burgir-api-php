<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Delivery::create([
            'distance' => 25,
            'employee_id' => 1,
            'car_id' => 1
        ]);

        \App\Models\Delivery::create([
            'distance' => 11,
            'employee_id' => 2,
            'car_id' => 2
        ]);
    }
}
