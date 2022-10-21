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
        //* 1
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 1]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 2]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 3]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 3]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 7]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [1, 7]);

        //* 2
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [2, 1]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [2, 4]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [2, 5]);
        DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [2, 8]);
    }
}
