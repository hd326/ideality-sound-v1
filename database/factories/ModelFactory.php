<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->sentence,
        'slug' => $faker->word,
        'meta_title' => $faker->word,
        'meta_description' => $faker->word,
        'meta_keywords' => $faker->word,
        'category_id' => rand(1, 6)
    ];
});
