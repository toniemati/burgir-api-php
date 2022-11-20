<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // * 1
        // DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 1]);

        $orders = \App\Models\Order::all();
        $products_count = \App\Models\Product::count();

        foreach ($orders as $order) {
            $num_of_products = rand(1, 6);
            $products_array = [];

            for ($i = 0; $i < $num_of_products; $i++) {
                $products_array[] = rand(1, $products_count);
            }

            $order->products()->attach($products_array);
        }
    }
}
