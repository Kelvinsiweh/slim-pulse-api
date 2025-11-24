<?php

declare(strict_types=1);

use Slim\App;
use App\Action\HomeAction;
use App\Action\ProjectListAction;

return function (App $app) {
    $app->get('/', HomeAction::class);
    $app->get('/api/projects', ProjectListAction::class);
};


// Project detail route
$app->get('/api/projects/{id}', \App\Action\ProjectViewAction::class);
