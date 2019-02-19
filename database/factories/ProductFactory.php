<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'vendor_code' => $faker->unique()->randomNumber(),
        'price' => $faker->randomDigit,
        'quantity' => rand(0,100),
        'active' => rand(0,1)
    ];
});
