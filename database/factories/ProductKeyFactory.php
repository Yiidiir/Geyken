<?php

use Faker\Generator as Faker;

$factory->define(App\ProductKey::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'key' => str_random(64),
    ];
});
