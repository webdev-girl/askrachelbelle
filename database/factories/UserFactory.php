<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// use App\Models\User;
use Faker\Generator;
// use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'password' => $password ?: $password = 'password',
//         'api_token' => Str::random(60),
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(User::class, function (Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'password' => $password ?: $password = 'password',
        'api_token' => Str::random(60),
        'remember_token' => Str::random(10),




    ];
});
$factory->state(User::class, 'anakin', function (Generator $faker) {
    return [
        'name' => 'Anakin',
        'email' => 'anakin@skywalker.st'
    ];
});
