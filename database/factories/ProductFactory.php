<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 5),
        'name' => [
            'uz' => $faker->sentence(3),
            'ru' => 'русский перевод названия продукта.'
        ],
        'price' => rand(50000, 10000000),
        'description' => [
            'uz' => $faker->paragraph(5),
            'ru' => 'русский description названия продукта.'
        ]
    ];
});
