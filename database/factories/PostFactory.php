<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    $content = $faker->text(1000);
    return [
        'header'      => $faker->sentence,
        'content'     => $content,
        'description' => $faker->text(200),
    ];
});
