<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->word
    ];
});
