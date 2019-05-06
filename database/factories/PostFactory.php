<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Models\Post;
use App\Models\User;
use Faker\Generator;
use App\Model;
use Faker\Generator as Faker;
// function (Faker $faker)
$factory->define(Post::class, function (Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'posted_at' => now(),
        'author_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
