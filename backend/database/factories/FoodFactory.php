<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Food;
use Faker\Generator as Faker;

$factory->define(Food::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'amount' => $faker->biasedNumberBetween($min = 0,$max=50)
    ];
});
