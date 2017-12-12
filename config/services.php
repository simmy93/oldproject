<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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

    'facebook' => [
    'client_id' => '1245844172202309',
    'client_secret' => '2479e99a6b79f49a85e452ecdd3a9e98',
    'redirect' => 'http://localhost:8080/laravel/public/login/facebook/callback',
],                  

    'twitter' => [
    'client_id' => 'VH39sFPqoM3eO5TcqrwiD3dhj',
    'client_secret' => 'omA6nUJyVm0f2oBEqum94axr2lb5xoNTV4ByM2p6UCyoVo3sJs',
    'redirect' => 'http://localhost:8080/laravel/public/login/twitter/callback',
], 

    'google' => [
    'client_id' => '101430872076-igg0hhst121q49k8oi4bb9bugmi176fn.apps.googleusercontent.com',
    'client_secret' => 'vHJxst_4NODTqtdrQF-27r13',
    'redirect' => 'http://localhost:8080/laravel/public/login/google/callback',
],

];
