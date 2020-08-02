<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\ProductOption::class, function (Faker $faker) {
    return [
        'key' => $faker->words(3, true),
        'field_type' => $faker->randomElement([
            'string',
            'integer',
            'boolean',
            'multi-select',
            'enum'
        ]),
        'options' => '',
        'validation' => $faker->randomElement([
            '',
            '',
            'required',
            'required|min:3',
            ''
        ]),
        'product_id' => \App\Product::inRandomOrder()->first(),
        'created_by' => 1,
        'updated_by' => 1,
    ];
});
