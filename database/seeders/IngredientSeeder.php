<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        (new \App\Models\Ingredient([
            'name' => 'Bułka',
            'description' => 'Świeża bułeczka wypiekana u nas w lokalu'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Kotlet z kurczaka',
            'description' => 'Najlepszy kotlecik z kurczaka jaki jadłeś'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Kotlet wołowy',
            'description' => 'Klasy w burgerze, nic wiecej nie moża dodać'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Kotlet vege',
            'description' => 'Niby vege a smakuje jak najlepsze mięsko'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Plasterki bekonu',
            'description' => 'Chrupiące i pysznitukie plasterki boczku'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Placek ziemniaczany',
            'description' => 'Lubie placki'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Prażona cebulka',
            'description' => 'Mmm chrupiące'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Ser camembert',
            'description' => 'Tłuściutki serek'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Ser cheddar',
            'description' => 'Pyszny serek cheddar'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Ser mozzarella',
            'description' => 'Oczywiście sama woda, tą białą kulke wyrzucamy'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Pomidor',
            'description' => 'Świeżutkie pomidorki'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Sałata',
            'description' => 'Świeżutka sałata'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Ogórki kiszone',
            'description' => 'Najlepsze ogórki kiszone z naszego kraju'
        ]))->save();

        (new \App\Models\Ingredient([
            'name' => 'Pieczarki',
            'description' => 'Coś dla grzybiarzy'
        ]))->save();
    }
}
