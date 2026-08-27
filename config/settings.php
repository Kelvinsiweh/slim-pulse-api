<?php

declare(strict_types=1);

return [
    'app' => [
        'name' => 'Slim Pulse API',
        'env' => 'production',
        'version' => '1.0.0',
        'debug' => false,
    ],
    'logger' => [
        'name' => 'slim-pulse',
        'path' => __DIR__ . '/../logs/app.log',
        'level' => \Monolog\Level::Info,
    ],
];
