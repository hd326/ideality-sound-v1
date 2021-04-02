<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'title' => $title,
        'body' => $faker->paragraph,
        'slug' => str_slug($title),
        'meta_title' => $faker->word,
        'meta_description' => $faker->word,
        'meta_keywords' => $faker->word,
        'image' => '/posts/' . rand(1,22) . '.jpg',

    ];
});
