<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Models\NewsletterSubscription;
use Faker\Generator;
use App\Model;
use Faker\Generator as Faker;
// function (Faker $faker)
$factory->define(NewsletterSubscription::class, function (Generator $faker) {
    return [
        'email' => $faker->unique()->safeEmail
    ];
});
