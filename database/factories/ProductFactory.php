<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->unique()->name;
    $slug = Str::slug($title, '-');

    return [
        //
        'name' => $title,
        'slug' => $slug,
        'price' => $faker->randomNumber(3),
        'description' => $faker->text('200'),

    ];
});
