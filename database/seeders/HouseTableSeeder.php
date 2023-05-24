<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\House;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //con json
        //$house = file_get_contents('data.json);
        //$house = json_decode($house, true);

        //con array php in config
        //$houses = config('nomefile)

        //con file csv
        //$houses = $this->getCsvData(__DIR__ .'/nomefile.csv');

        for ($i = 0; $i < 50; $i++) {
            $newHouse = new House();
            $newHouse->title = $faker->words(5, true);
            $newHouse->address = $faker->address();
            $newHouse->postal_code = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->state();
            $newHouse->square_meters = $faker->numberBetween(40, 500);
            $newHouse->rooms = $faker->randomDigitNotNull();
            $newHouse->bathrooms = $faker->randomDigitNotNull();
            $newHouse->garage = $faker->randomDigitNotNull();
            $newHouse->price = $faker->randomFloat(1, 20000, 300000);
            $newHouse->description = $faker->paragraph();
            $newHouse->save();
        }


        //dopo aver popolato tutti i dati lanciamo questa funzione
        //$newHouse->save();

    }
}