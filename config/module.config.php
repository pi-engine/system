<?php

namespace System;

use Laminas\Mvc\Middleware\PipeSpec;
use Laminas\Router\Http\Literal;

return [
    'service_manager' => [
        'aliases'   => [

        ],
        'factories' => [

        ],
    ],

    'router' => [],

    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];