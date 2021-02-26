<?php

return [
    'http' => [
        // how many retries before we actually throw an exception?
        'retries' => 5,

        // on which status code we should consider retrying the request?
        'retry_on_status_code' => [],

        // before retrying a failed request, wait for the specified amount of time, in milliseconds
        'retry_delay' => 2000,

        'authorization_header_bearer_token' => env('DWV_BEARER_TOKEN', ''),

        // guzzle configuration, given to Guzzle instance as is
        'guzzle' => [
            'base_uri' => 'https://dwvapp.com.br/',

            // Number of seconds to wait while trying to connect to a server. 0 waits indefinitely.
            'connect_timeout' => 0.0,

            // Time needed to throw a timeout exception after a request is made.
            'timeout' => 0.0,

            // Set this to true if you want to debug the request/response.
            'debug' => false,

            'middlewares' => [
                \Jetimob\Http\Middlewares\AuthorizationBearerRequestMiddleware::class,
            ],
        ],
    ],
];
