<?php

namespace Database\Seeders;

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
            'name' => 'Burgir',
            'img' => 'https://c4.wallpaperflare.com/wallpaper/209/721/107/food-burger-wallpaper-preview.jpg',
            'description' => 'Nasza specjalność, nie jadłeś nigdy nic lepszego serio, po prostu go zamów i skosztuj, tylko ostrzegamy, że będziesz po niego wracał częściej niż Ci się wydaje',
            'price' => 29.99,
            'category_id' => 1
        ]);

        \App\Models\Product::create([
            'name' => 'Cheeser',
            'img' => 'https://besthqwallpapers.com/Uploads/23-8-2016/49/thumb2-hamburger-fast-food-cheeseburger-sandwich.jpg',
            'description' => 'Jak lubisz ser, to jest to burger dla Ciebie (zawiera dużą ilość sera)',
            'price' => 24.99,
            'category_id' => 1
        ]);

        \App\Models\Product::create([
            'name' => 'Hottuwa',
            'img' => 'https://img.freepik.com/premium-zdjecie/pikantny-burger_777078-577.jpg',
            'description' => 'Dla miłośników ostrych smaków, czeba podpisać oświadczenie 🌶',
            'price' => 24.99,
            'category_id' => 1
        ]);

        \App\Models\Product::create([
            'name' => 'Kurczaker',
            'img' => 'https://4.bp.blogspot.com/-Vgb44KN0fhs/WseEYrOyrzI/AAAAAAAAEOM/QcUYbVXrHp0MrEuMwjnH0ScMQ1716Y04QCLcBGAs/s1600/collage%2Bchicken_004.jpg',
            'description' => 'Jeśli potrzbujesz dostaczyć organizmowi sporą ilość białka to właśnie opcja dla Ciebię 🐔',
            'price' => 24.99,
            'category_id' => 1
        ]);

        \App\Models\Product::create([
            'name' => 'Veggie',
            'img' => 'https://szefsmaku.pl/wp-content/uploads/2021/04/wege-burger-1250x712.jpg',
            'description' => 'Pierwszej klasy burger wege, dla każdego się coś u nas znajdzie 😉',
            'price' => 24.99,
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

        \App\Models\Product::create([
            'name' => 'Frytki z batatów',
            'img' => 'https://static.fajnegotowanie.pl/media/uploads/media_image/original/przepis/1364/frytki-z-batatow.jpg',
            'description' => 'Słodziutkie i pyszniutkie fryteczki ze słodziutkich ziemniaczków',
            'price' => 9.99,
            'category_id' => 2
        ]);

        \App\Models\Product::create([
            'name' => 'Naczosy',
            'img' => 'https://wallpapercave.com/wp/wp3055375.jpg',
            'description' => 'Hiszpańska przekąska, trójkąciki z roztopionym serkiem',
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
            'name' => 'Sos pikantna salsa',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSCDyO82Fp10Nf5qbu4pa8rKRBQRCmrMUNHg&usqp=CAU',
            'description' => 'Następny poranek będzie ciężki',
            'price' => 1.99,
            'category_id' => 3
        ]);

        \App\Models\Product::create([
            'name' => 'Sos BBQ',
            'img' => 'https://www.mashed.com/img/gallery/the-biggest-mistakes-people-make-with-bbq-sauces/l-intro-1628008780.jpg',
            'description' => 'Kurcze pieczone jaki on jest pszyny 🤤',
            'price' => 1.99,
            'category_id' => 3
        ]);

        \App\Models\Product::create([
            'name' => 'Tortex',
            'img' => 'https://www.carrefour.pl/images/product/org/tortex-ketchup-pikantny-470-g-i2cci3.jpg',
            'description' => 'Keczup premium',
            'price' => 1.99,
            'category_id' => 3
        ]);

        //! NAPOJE
        \App\Models\Product::create([
            'name' => 'Coca-cola',
            'img' => 'https://st.depositphotos.com/3594223/4990/i/600/depositphotos_49909665-stock-photo-splash-coke.jpg',
            'description' => 'Czarny napój, standard do każdego posiłku',
            'price' => 3.99,
            'category_id' => 4
        ]);

        \App\Models\Product::create([
            'name' => 'Sprite',
            'img' => 'https://i.pinimg.com/originals/fc/d3/8e/fcd38e7ee690829fb8a7e9d39e1f3d80.jpg',
            'description' => 'Pyszny napój cytrynowo-limonkowym 🍋',
            'price' => 3.99,
            'category_id' => 4
        ]);

        \App\Models\Product::create([
            'name' => 'Fanta',
            'img' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0877aee5-82b0-4ffb-bd37-51429a176805/d60eut3-1011575a-2fee-466e-8ecd-02c7505e490d.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzA4NzdhZWU1LTgyYjAtNGZmYi1iZDM3LTUxNDI5YTE3NjgwNVwvZDYwZXV0My0xMDExNTc1YS0yZmVlLTQ2NmUtOGVjZC0wMmM3NTA1ZTQ5MGQuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.X22yDiR3VzVEuTdxj-kdq8y1Hubt61BRKBzd44ykrkk',
            'description' => 'Napój gazowany o smaku owocowym produkowany',
            'price' => 3.99,
            'category_id' => 4
        ]);

        \App\Models\Product::create([
            'name' => 'Woda',
            'img' => 'https://tvn24.pl/najnowsze/cdn-zdjecie708b2cdc6df566f24f02734188364a28-prokuratura-umorzyla-sledztwo-ws-wody-zywiec-4306202/alternates/LANDSCAPE_1280',
            'description' => 'Związek chemiczny o wzorze H₂O',
            'price' => 1.99,
            'category_id' => 4
        ]);

        \App\Models\Product::create([
            'name' => 'Piwo henken',
            'img' => 'https://wallpaperaccess.com/full/1952089.jpg',
            'description' => 'Jak pywko to tylko i wyłącznie henken 🍺',
            'price' => 4.99,
            'category_id' => 4
        ]);
    }
}
