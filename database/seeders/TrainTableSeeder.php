<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->words(1, true);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-3 hours', 'now');
            $newTrain->arrival_time = $faker->dateTimeInInterval('now', '+3 hours');
            $newTrain->train_code = $faker->numberBetween(0, 255);
            $newTrain->number_of_carriages = $faker->randomDigitNotNull();
            $newTrain->in_time = $faker->words(5, true);
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}