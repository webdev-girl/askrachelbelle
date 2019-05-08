<?php

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
// // function (Faker $faker)
// $factory->define(App\Comment::class, function (Faker $faker) {
//     return [
//
//         'comment' => $faker->realText(rand(10, 300)),
//     ];
// });

$factory->define(Comment::class, function (Generator $faker) {
    return [
        'body' => $faker->paragraph,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'post_id' => function () {
            return factory(Post::class)->create()->id;
        }
    ];
});
