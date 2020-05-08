<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = Str::slug($title, '-');

    return [
        //
        'name' => $title,
        'slug' => $slug,

    ];
});
