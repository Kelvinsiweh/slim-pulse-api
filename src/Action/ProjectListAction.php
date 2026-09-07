<?php

declare(strict_types=1);

namespace App\Action;

use App\Domain\Repository\ProjectRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class ProjectListAction
{
    public function __construct(private ProjectRepository $repository) {}

    public function __invoke(Request $request, Response $response): Response
    {
        $projects = $this->repository->findAll();
        $response->getBody()->write(json_encode($projects, JSON_THROW_ON_ERROR));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
