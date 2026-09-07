<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class HomeAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $payload = json_encode([
            'service' => 'Slim Pulse API',
            'status' => 'healthy',
            'version' => '1.0.0'
        ], JSON_THROW_ON_ERROR);

        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
