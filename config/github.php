<?php

/*
 * This file is part of Laravel GitHub.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | GitHub Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like. Note that the 3 supported authentication methods are:
    | "application", "password", and "token".
    |
    */

    'connections' => [

        // 'main' => [
        //     'token' => '84336e34cf163f68cdf7f24cbbb01d2b21ad2e15',
        //     'method' => 'token',
        //     'cache' => true,
        //     // 'backoff' => false,
        //     // 'logging' => Guzzle\Log\MessageFormatter::DEBUG_FORMAT,
        //     // 'baseUrl' => 'https://api.github.com/',
        //     // 'version' => 'v3',
        // ],

        'alternative' => [
            'clientId' => env('GITHUB_CLIENT_ID'),
            'clientSecret' => env('GITHUB_CLIENT_SECRET'),
            'method' => 'application',
            'cache' => true,
            // 'backoff'      => false,
            // 'logging'      => Guzzle\Log\MessageFormatter::DEBUG_FORMAT,
            // 'baseUrl'      => 'https://api.github.com/',
            // 'version'      => 'v3',
        ],

        'other' => [
            'username' => 'your-username',
            'password' => 'your-password',
            'method' => 'password',
            'cache' => true,
            // 'backoff'  => false,
            // 'logging'  => Guzzle\Log\MessageFormatter::DEBUG_FORMAT,
            // 'baseUrl'  => 'https://api.github.com/',
            // 'version'  => 'v3',
        ],

    ],

];
