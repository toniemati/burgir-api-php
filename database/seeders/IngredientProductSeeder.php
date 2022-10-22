<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //! DRWAL
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 3]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 6]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 7]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 8]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 12]);

        //! NIE MA LIPY
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 3]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 7]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 11]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 12]);
    }
}
