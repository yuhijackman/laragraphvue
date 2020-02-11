<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'start_date' => $faker->dateTime,
        'end_date' => $faker->dateTime,
        'location' => $faker->locale
    ];
});
