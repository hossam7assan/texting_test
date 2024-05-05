<?php

return [
    'secret_key' => env('STRIPE_SECRET'),
    'public_key' => env('STRIPE_KEY'),
    'currency' => env('STRIPE_CURRENCY'),
];