<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //! BURGERY
        (new \App\Models\Product([
            'name' => 'Drwal',
            'description' => 'Kanapka drwala to pyszny burger z soczystym kotletem z mięsa wołowego.',
            'price' => 19.99,
            'category_id' => 1
        ]))->save();

        (new \App\Models\Product([
            'name' => 'NIE MA LIPY',
            'description' => 'Na serio nie ma lipy z tym burgerem',
            'price' => 29.99,
            'category_id' => 1
        ]))->save();

        //! DODATKI
        (new \App\Models\Product([
            'name' => 'Frytki',
            'description' => 'Robione na miejscu, pyszne i chrupiące frytki',
            'price' => 4.99,
            'category_id' => 2
        ]))->save();

        (new \App\Models\Product([
            'name' => 'Nuggetsy',
            'description' => 'Smakowite kawałki kurczaczka',
            'price' => 9.99,
            'category_id' => 2
        ]))->save();

        //! SOSY
        (new \App\Models\Product([
            'name' => 'Sos czosnkowy',
            'description' => 'Nie radzę się po nim całować',
            'price' => 1.99,
            'category_id' => 3
        ]))->save();

        (new \App\Models\Product([
            'name' => 'Sos ostry',
            'description' => 'Następny poranek będzie ciężki',
            'price' => 1.99,
            'category_id' => 3
        ]))->save();

        //! NAPOJE
        (new \App\Models\Product([
            'name' => 'Coca-cola',
            'description' => 'Standard do każdego burgera',
            'price' => 3.99,
            'category_id' => 4
        ]))->save();

        (new \App\Models\Product([
            'name' => 'Piwo henken',
            'description' => 'Jak pywko to henken',
            'price' => 5.99,
            'category_id' => 4
        ]))->save();
    }
}
