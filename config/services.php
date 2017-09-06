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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyAWubi8YCs_kmNaS5-pw5Uau4CHEbUbveI',
        'auth_domain' => 'kilax-japan.firebaseapp.com',
        'database_url' => 'https://kilax-japan.firebaseio.com/',
        'secret' => 'QmtUGmhDWZGtNpahRV1XMK8XEb9LuAnN4CFAy8qt',
        'storage_bucket' => 'kilax-japan.appspot.com',
    ],
];
