<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Models\Role;
use Faker\Generator;
use App\Model;
use Faker\Generator as Faker;

// $factory->define(Model::class, function (Faker $faker) {
//     return [
//         //
//     ];
// });

$factory->define(Role::class, function (Generator $faker) {
return [
    'name' => $faker->word
];
});
$factory->state(Role::class, 'admin', function ($faker) {
return [
    'name' => 'admin'
];
});
$factory->state(Role::class, 'editor', function ($faker) {
return [
    'name' => 'editor'
];
});
