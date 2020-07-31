<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(random_int(2, 4), true),
        'sku' => $faker->randomNumber(9),
        'barcode' => $faker->randomNumber(9),
        'product_types_id' => random_int(1, 5),
        'created_by' => 1,
        'updated_by' => 1,
    ];
});
