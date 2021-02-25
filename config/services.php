<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

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
    'facebook' => [
        'client_id' => '832762797572685',
        'client_secret' => '7b8211c466b3d988870efc0c265e7510',
        // 'redirect' => 'https://www.impress.express/login/facebook/callback',
        // 'client_id' => socialLogin()->fb_app_id,
        // 'client_secret' => socialLogin()->fb_app_secret,
        'redirect' => env('FACEBOOK_REDIRECT_URI'),
    ],
    'google' => [
        // 'client_id' => socialLogin()->google_client_id,
        // 'client_secret' => socialLogin()->google_client_secret,
        'redirect' => env('GOOGLE_CALLBACK_URL'),
    ],
];
