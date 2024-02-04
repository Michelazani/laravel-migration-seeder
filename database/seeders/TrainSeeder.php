<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        for ($i=0; $i < 25; $i++) { 
            $actualTrain = new Train();
            $actualTrain->company = $Faker->word();
            $actualTrain->departure_station = $Faker->word();
            $actualTrain->arrival_station = $Faker->word();
            $actualTrain->departure_time = $Faker->dateTime();
            $actualTrain->arrival_time = $Faker->dateTime();
            $actualTrain->train_code = $Faker->randomNumber(3, true);
            $actualTrain->number_of_wagon = $Faker->randomNumber(2, true);
            $actualTrain->on_schedule=$Faker-> boolean();
            $actualTrain->cancelled = $Faker->boolean();
            $actualTrain->save();
        }
    }
}

