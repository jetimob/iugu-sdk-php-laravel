<?php

return [
    'http' => [
        // how many retries before we actually throw an exception?
        'retries' => 5,

        // on which status code we should consider retrying the request?
        'retry_on_status_code' => [],

        // before retrying a failed request, wait for the specified amount of time, in milliseconds
        'retry_delay' => 2000,

        // iugu's bearer token resolver to base64
        'authorization_header_bearer_token' => \Jetimob\Iugu\Middleware\Base64BearerResolver::class,

        // iugu's bearer token
        'bearer_token_value' => env('IUGU_BEARER_TOKEN', ''),

        // guzzle configuration, given to Guzzle instance as is
        'guzzle' => [
            'base_uri' => env('IUGU_BASE_URI', 'https://api.iugu.com/v1/'),

            // Number of seconds to wait while trying to connect to a server. 0 waits indefinitely.
            'connect_timeout' => 0.0,

            // Time needed to throw a timeout exception after a request is made.
            'timeout' => 0.0,

            // Set this to true if you want to debug the request/response.
            'debug' => true,

            'middlewares' => [
                \Jetimob\Http\Middlewares\AuthorizationBearerRequestMiddleware::class
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Implementação dos endpoints da API
    |--------------------------------------------------------------------------
    |
    | Escolheu-se dar a opção de sobrescrever a implementação de um endpoint para que, se necessário, possam ser
    | modificados sem a necessidade de alterar o pacote original.
    |
    | A única obrigatoriedade é que a classe estenda \Jetimob\Iugu\Api\AbstractApi.
    |
    | Chaves também podem ser adicionadas neste vetor e assim serem chamadas direto da facade.
    |
    */
    'api_impl' => [
        'invoice' => \Jetimob\Iugu\Api\Invoice\InvoiceApi::class,
    ],
];
