<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Draft Status
    |--------------------------------------------------------------------------
    |
    | When a draft order is created from a cart, we need an initial status for
    | the order that's created. Define that here, it can be anything that would
    | make sense for the store you're building.
    |
    */
    'draft_status' => 'awaiting-payment',
    'statuses'     => [
        'awaiting-payment' => [
            'label' => 'Awaiting Payment',
        ],
        'payment-received' => [
            'label' => 'Payment Received',
            'color' => '#179669',
        ],
        'dispatched' => [
            'label' => 'Dispatched',
            'color' => '#0A81D7',
        ],
        'payment-offline' => [
            'label' => 'Payment Offline',
            'color' => '#0A81D7',
        ],
    ],
];
