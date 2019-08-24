<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1,6),
        'brand_id' => $faker->numberBetween(1,2),
        'name' => $faker->word,
        'stock' => $faker->boolean,
        'image' => $faker->imageUrl(320, 200, 'technics'),
        'price' => $faker->randomDigit()

    ];
});
