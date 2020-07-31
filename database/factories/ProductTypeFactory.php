<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\ProductType::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
    ];
});
