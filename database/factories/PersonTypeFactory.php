<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\PersonType::class, function (Faker $faker) {
    return [
        'type' => $faker->word,
    ];
});
