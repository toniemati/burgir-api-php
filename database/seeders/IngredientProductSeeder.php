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
        //! Burgir
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 3]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 5]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 9]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 11]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 15]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 16]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 17]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [1, 18]);

        //! Cheeser
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 3]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 8]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 9]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 10]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 11]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 12]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [2, 19]);

        //! Hottuwa
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [3, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [3, 3]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [3, 11]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [3, 12]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [3, 16]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [3, 20]);

        //! Kurczaker
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [4, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [4, 2]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [4, 5]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [4, 12]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [4, 21]);
        
        //! Veggie
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 1]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 4]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 11]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 12]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 18]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 22]);
        DB::insert('insert into ingredient_product (product_id, ingredient_id) values (?, ?)', [5, 23]);
    }
}
