<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Action\HomeAction;
use Slim\Psr7\Factory\ServerRequestFactory;
use Slim\Psr7\Factory\ResponseFactory;

final class HomeActionTest extends TestCase
{
    public function testHomeReturnsHealthyStatus(): void
    {
        $action = new HomeAction();
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/');
        $response = (new ResponseFactory())->createResponse();

        $res = $action($request, $response);
        $this->assertSame(200, $res->getStatusCode());
        $body = (string) $res->getBody();
        $this->assertStringContainsString('Slim Pulse API', $body);
        $this->assertStringContainsString('healthy', $body);
    }
}
