<?php
namespace App\Middleware;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
class TimingMiddleware implements MiddlewareInterface {
    public function process(Request $request, RequestHandler $handler): Response {
        $start = microtime(true);
        $response = $handler->handle($request);
        $dur = round((microtime(true) - $start) * 1000, 2);
        return $response->withHeader('X-Runtime-Ms', (string)$dur);
    }
}
