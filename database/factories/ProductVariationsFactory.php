<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\ProductVariation;
use Faker\Generator as Faker;


$factory->define(ProductVariation::class, function (Faker $faker) {
    return [
        'product_id' => rand(1, 5),
        'product_variation_type_id' => rand(1, 5),
        'name'       => $faker->unique()->name,
    ];
});
