<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comics.card');


        foreach( $comicsArray as $elem ){
            $newCard = new Card();
            $newCard->title = $elem['title'];
            $newCard->description = $elem['description'];
            $newCard->thumb = $elem['thumb'];
            $newCard->price = $elem['price'];
            $newCard->series = $elem['series'];
            $newCard->sale_date = $elem['sale_date'];
            $newCard->type = $elem['type']; 
            $newCard->save();
        }
    }
}
