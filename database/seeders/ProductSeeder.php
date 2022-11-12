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
        \App\Models\Product::create([
            'name' => 'Drwal',
            'img' => 'https://img.styl.fm/resize/w1280/newsy/wp-content/uploads/2022/01/drwal.jpg',
            'description' => 'Kanapka drwala to pyszny burger z soczystym kotletem z mięsa wołowego.',
            'price' => 19.99,
            'category_id' => 1
        ]);

        \App\Models\Product::create([
            'name' => 'NIE MA LIPY',
            'img' => 'https://restaumatic-production.imgix.net/uploads/accounts/170870/media_library/7b83a691-8c8a-463f-9b28-4938bac2a218.jpg',
            'description' => 'Na serio nie ma lipy z tym burgerem',
            'price' => 29.99,
            'category_id' => 1
        ]);

        //! DODATKI
        \App\Models\Product::create([
            'name' => 'Frytki',
            'img' => 'https://prostepesto.pl/wp-content/uploads/2021/03/frytki.jpg',
            'description' => 'Robione na miejscu, pyszne i chrupiące frytki',
            'price' => 4.99,
            'category_id' => 2
        ]);

        \App\Models\Product::create([
            'name' => 'Nuggetsy',
            'img' => 'https://bi.im-g.pl/im/1a/f3/19/z27211802V,Nuggetsy.jpg',
            'description' => 'Smakowite kawałki kurczaczka',
            'price' => 9.99,
            'category_id' => 2
        ]);

        //! SOSY
        \App\Models\Product::create([
            'name' => 'Sos czosnkowy',
            'img' => 'https://i.wpimg.pl/O/644x630/d.wpimg.pl/141691940-732325571/sos-czosnkowy.jpg',
            'description' => 'Nie radzę się po nim całować',
            'price' => 1.99,
            'category_id' => 3
        ]);

        \App\Models\Product::create([
            'name' => 'Sos ostry',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSCDyO82Fp10Nf5qbu4pa8rKRBQRCmrMUNHg&usqp=CAU',
            'description' => 'Następny poranek będzie ciężki',
            'price' => 1.99,
            'category_id' => 3
        ]);

        //! NAPOJE
        \App\Models\Product::create([
            'name' => 'Coca-cola',
            'img' => 'https://st.depositphotos.com/3594223/4990/i/600/depositphotos_49909665-stock-photo-splash-coke.jpg',
            'description' => 'Standard do każdego burgera',
            'price' => 3.99,
            'category_id' => 4
        ]);

        \App\Models\Product::create([
            'name' => 'Piwo henken',
            'img' => 'https://wallpaperaccess.com/full/1952089.jpg',
            'description' => 'Jak pywko to henken',
            'price' => 5.99,
            'category_id' => 4
        ]);
    }
}
