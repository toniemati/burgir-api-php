<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ingredient::create([ //* 1
            'name' => 'Bułka',
            'description' => 'Świeża bułeczka wypiekana u nas w lokalu'
        ]);

        \App\Models\Ingredient::create([ //* 2
            'name' => 'Kotlet z kurczaka',
            'description' => 'Najlepszy kotlecik z kurczaka jaki jadłeś'
        ]);

        \App\Models\Ingredient::create([ //* 3
            'name' => 'Kotlet wołowy',
            'description' => 'Mięsko wołowe pierwszej klasy, pyszne i soczyste'
        ]);

        \App\Models\Ingredient::create([ //* 4
            'name' => 'Kotlet vege',
            'description' => 'Niby vege a smakuje jak najlepsze mięsko'
        ]);

        \App\Models\Ingredient::create([ //* 5
            'name' => 'Plasterki bekonu',
            'description' => 'Chrupiące i pysznitukie plasterki boczku'
        ]);

        \App\Models\Ingredient::create([ //* 6
            'name' => 'Placek ziemniaczany',
            'description' => 'Lubie placki'
        ]);

        \App\Models\Ingredient::create([ //* 7
            'name' => 'Prażona cebulka',
            'description' => 'Mmm chrupiące'
        ]);

        \App\Models\Ingredient::create([ //* 8
            'name' => 'Ser camembert',
            'description' => 'Tłuściutki serek'
        ]);

        \App\Models\Ingredient::create([ //* 9
            'name' => 'Ser cheddar',
            'description' => 'Pyszny serek cheddar'
        ]);

        \App\Models\Ingredient::create([ //* 10
            'name' => 'Ser mozzarella',
            'description' => 'Oczywiście sama woda, tą białą kulke wyrzucamy'
        ]);

        \App\Models\Ingredient::create([ //* 11
            'name' => 'Pomidor',
            'description' => 'Świeżutkie pomidorki'
        ]);

        \App\Models\Ingredient::create([ //* 12
            'name' => 'Sałata',
            'description' => 'Świeżutka sałata'
        ]);

        \App\Models\Ingredient::create([ //* 13
            'name' => 'Ogórki kiszone',
            'description' => 'Najlepsze ogórki kiszone z naszego kraju'
        ]);

        \App\Models\Ingredient::create([ //* 14
            'name' => 'Pieczarki',
            'description' => 'Coś dla grzybiarzy'
        ]);

        \App\Models\Ingredient::create([ //* 15
            'name' => 'Rukola',
            'description' => 'Prawie sałata ale zdrowsza'
        ]);

        \App\Models\Ingredient::create([ //* 16
            'name' => 'Ostre papryczki',
            'description' => 'Ostre ale nie aż tak, żeby niezjeść'
        ]);

        \App\Models\Ingredient::create([ //* 17
            'name' => 'Sosik BBQ',
            'description' => 'Sosik BBQ'
        ]);

        \App\Models\Ingredient::create([ //* 18
            'name' => 'Czerwona cebulka',
            'description' => 'Bo w końcu jesteśmy Polakami'
        ]);

        \App\Models\Ingredient::create([ //* 19
            'name' => 'Cebula',
            'description' => 'Bo w końcu jesteśmy Polakami'
        ]);

        \App\Models\Ingredient::create([ //* 120
            'name' => 'Sosik ultra ostry',
            'description' => 'Fiu fiu'
        ]);
    }
}
