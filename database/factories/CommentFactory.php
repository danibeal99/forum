<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;


$factory->define(Comment::class, function (Faker $faker) {
    return [
        'created_at' => now(),
        'updated_at' => now(),
        'CommentTitle' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'CommentBody' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'user_id' => factory(App\User::class),
        'post_id' => factory(App\Post::class)
    ];
});