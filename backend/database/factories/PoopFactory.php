<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Poop;
use Faker\Generator as Faker;

$factory->define(Poop::class, function (Faker $faker) {
    return [
        'consistency' => $faker->biasedNumberBetween($min = 0,$max=5),
        'color' => $faker->biasedNumberBetween($min = 0,$max=5),
        'date' => $faker->date,
    ];
});
