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
        \App\Models\Order::factory(419)->create();
        
        // \App\Models\Order::create([
        //     'customer_id' => 1,
        //     'order_date' => date('Y-m-d H:i:s')
        // ]);

        // \App\Models\Order::create([
        //     'customer_id' => 2,
        //     'order_date' => date('Y-m-d H:i:s')
        // ]);
    }
}
