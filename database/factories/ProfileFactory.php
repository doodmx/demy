<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name'         => $faker->name,
        'lastname'     => $faker->lastName,
        'whatsapp' => $faker->e164PhoneNumber,
        'photo'        => ''//'users/' . $faker->image(public_path('storage/users'), 400, 300, null, false),
    ];
});
