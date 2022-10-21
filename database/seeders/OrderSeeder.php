<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::create([
            'completed' => true,
            'customer_id' => 1,
            'order_date' => date('Y-m-d H:i:s'),
            'delivery_id' => 1
        ]);

        \App\Models\Order::create([
            'completed' => true,
            'customer_id' => 2,
            'order_date' => date('Y-m-d H:i:s'),
            'delivery_id' => 2
        ]);
    }
}