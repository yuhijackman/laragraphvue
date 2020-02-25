<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\FoodRecord;
use Faker\Generator as Faker;

$factory->define(FoodRecord::class, function (Faker $faker) {
    return [
        'amount' => $faker->biasedNumberBetween($min = 0,$max=50),
        'feeding_time' => $faker->dateTime,
        'food_id' => $faker->biasedNumberBetween($min = 230,$max=240)
    ];
});
