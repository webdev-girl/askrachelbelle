<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Generator;
use App\Model;
use Faker\Generator as Faker;
// function (Faker $faker)
$factory->define(Comment::class, function (Generator $faker) {
    return [
        'content' => $faker->paragraph,
        'author_id' => function () {
            return factory(User::class)->create()->id;
        },
        'post_id' => function () {
            return factory(Post::class)->create()->id;
        }
    ];
});
