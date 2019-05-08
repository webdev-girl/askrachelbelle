<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
  //   'facebook' => [
  //      'client_id' => '2259269221008965', //Facebook API
  //      'client_secret' => '447f3da49b8511012c2652e98684a673', //Facebook Secret
  //      'redirect' => 'http://laravel.localhost/login/facebook/callback',
  //  ],
  //  'github' => [
  //      'client_id' => 'af54e6bae9a4edfc6cbb',
  //      'client_secret' => '95afc7b40e6aca6419a7623c34bb6d86cb2ac',
  //      'redirect' => 'http://laravel.localhost/login/github/callback',
  //   ],
  // 'twitter' => [
  //      'client_id' => '8JS1GvRflY5g9N3kZc0heYTqL',
  //      'client_secret' => 'eYujptPLBAAzdHIz8hiqGgz4MkJTcmL1JAGEuEZsGU1MykjK',
  //      'redirect' => 'http://laravel.localhost/login/twitter/callback',
  //  ],
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

];
