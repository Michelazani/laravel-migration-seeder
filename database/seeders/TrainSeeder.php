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
        for ($i=0; $i < 5; $i++) { 
            $actualTrain = new Train();
            $actualTrain->company = $Faker->company();
            $actualTrain->departure_station = $Faker->city();
            $actualTrain->arrival_station = $Faker->city();
            $actualTrain->departure_time = $Faker->dateTime();
            $actualTrain->arrival_time = $Faker->dateTime();
            $actualTrain->train_code = $Faker->randomNumber(3, true);
            $actualTrain->number_of_wagon = $Faker->numberBetween(1,10);
            $actualTrain->on_schedule=$Faker-> boolean();
            $actualTrain->cancelled = $Faker->boolean();
            $actualTrain->save();
        }
    }
}

