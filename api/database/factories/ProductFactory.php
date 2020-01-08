<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(8),
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(2, 1, 200),
        'stock' => $faker->numberBetween(1, 200),
        'image' => $faker->imageUrl(640, 480),
        'user_id' => function () {
            return User::all()->random()->id;
        }
    ];
});