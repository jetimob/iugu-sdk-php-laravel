<?php

return [
    'http' => [
        // how many retries before we actually throw an exception?
        'retries' => 5,

        // on which status code we should consider retrying the request?
        'retry_on_status_code' => [],

        // before retrying a failed request, wait for the specified amount of time, in milliseconds
        'retry_delay' => 2000,

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
            ],
        ],
    ],

    'private_key' => env('IUGU_PRIVATE_KEY', ''),

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
        'account' => \Jetimob\Iugu\Api\Account\AccountApi::class,
        'invoice' => \Jetimob\Iugu\Api\Invoice\InvoiceApi::class,
        'charge' => \Jetimob\Iugu\Api\Charge\ChargeApi::class,
        'customer' => \Jetimob\Iugu\Api\Customer\CustomerApi::class,
        'signature' => \Jetimob\Iugu\Api\Signature\SignatureApi::class,
        'transfer' => \Jetimob\Iugu\Api\Transfer\TransferApi::class,
        'webhook' => \Jetimob\Iugu\Api\Webhook\WebhookApi::class,
    ],
];
