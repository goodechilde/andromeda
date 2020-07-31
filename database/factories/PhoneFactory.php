<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Propaganistas\LaravelPhone\PhoneNumber;

$factory->define(\Goodechilde\CommonContact\Models\Phone::class, function (Faker $faker) {
    return [
        'contact_type' => \Goodechilde\CommonContact\Models\ContactType::inRandomOrder()->whereType('phone')->first(),
        'phone_number' => substr(PhoneNumber::make(
            '14158501234',
            'us'
        )->formatE164(), 1),
        'locale' => 'US',
    ];
});
