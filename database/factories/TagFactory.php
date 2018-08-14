<?php

use Faker\Generator as Faker;

$factory->define(Spatie\Tags\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
