<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    'settings' => function () {
        return require __DIR__ . '/settings.php';
    },
    LoggerInterface::class => function (ContainerInterface $c) {
        $settings = $c->get('settings')['logger'];
        $logger = new Logger($settings['name']);
        $logger->pushHandler(new StreamHandler($settings['path'], $settings['level']));
        return $logger;
    },
]);

return $containerBuilder->build();


// Timing registered
