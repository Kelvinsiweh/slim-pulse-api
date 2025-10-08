<?php
namespace App\Action;
use App\Domain\Repository\ProjectRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class ProjectViewAction {
    public function __construct(private ProjectRepository $repo) {}
    public function __invoke(Request $req, Response $res, array $args): Response {
        $p = $this->repo->findById($args['id'] ?? '');
        if (!$p) return $res->withStatus(404);
        $res->getBody()->write(json_encode($p));
        return $res->withHeader('Content-Type', 'application/json');
    }
}
