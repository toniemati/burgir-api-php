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
        \App\Models\Ingredient::create([
            'name' => 'Bułka',
            'description' => 'Świeża bułeczka wypiekana u nas w lokalu'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Kotlet z kurczaka',
            'description' => 'Najlepszy kotlecik z kurczaka jaki jadłeś'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Kotlet wołowy',
            'description' => 'Klasy w burgerze, nic wiecej nie moża dodać'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Kotlet vege',
            'description' => 'Niby vege a smakuje jak najlepsze mięsko'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Plasterki bekonu',
            'description' => 'Chrupiące i pysznitukie plasterki boczku'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Placek ziemniaczany',
            'description' => 'Lubie placki'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Prażona cebulka',
            'description' => 'Mmm chrupiące'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Ser camembert',
            'description' => 'Tłuściutki serek'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Ser cheddar',
            'description' => 'Pyszny serek cheddar'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Ser mozzarella',
            'description' => 'Oczywiście sama woda, tą białą kulke wyrzucamy'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Pomidor',
            'description' => 'Świeżutkie pomidorki'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Sałata',
            'description' => 'Świeżutka sałata'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Ogórki kiszone',
            'description' => 'Najlepsze ogórki kiszone z naszego kraju'
        ]);

        \App\Models\Ingredient::create([
            'name' => 'Pieczarki',
            'description' => 'Coś dla grzybiarzy'
        ]);
    }
}
