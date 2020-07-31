<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'middle_name' => $faker->randomElement([$faker->firstName, null]),
        'last_name' => $faker->lastName,
        'preferred_name' => $faker->randomElement([$faker->firstName, null]),
        'title' => $faker->randomElement([$faker->title, null]),
        'suffix' => $faker->randomElement([null, null, 'II', 'Jr.', 'Sr.', 'III']),
        'professional_title' => $faker->randomElement([null, null, 'MD', 'PhD', 'Esq', null]),
        'preferred_language' =>
            $faker->randomElement(['English', 'English', 'Spanish', 'French', 'German', 'English','English']),
        'date_of_birth' =>
            $faker->dateTimeBetween(
                \Carbon\Carbon::now()->subYears(90),
                \Carbon\Carbon::now()->subYears(12)
            ),
        'created_by' => 1,
        'updated_by' => 1,
        'person_type_id' => random_int(1, 5),
    ];
});
