<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Project;

final class ProjectRepository
{
    private array $projects = [];

    public function __construct()
    {
        $this->projects = [
            new Project('proj_001', 'Cloud Migration Engine', 'Infrastructure', 'active', '2025-06-01T10:00:00Z'),
            new Project('proj_002', 'Telemetry Collector', 'Observability', 'completed', '2025-08-15T14:30:00Z'),
        ];
    }

    public function findAll(): array
    {
        return $this->projects;
    }

    public function findById(string $id): ?Project
    {
        foreach ($this->projects as $p) {
            if ($p->id === $id) return $p;
        }
        return null;
    }

    public function save(Project $project): void
    {
        $this->projects[] = $project;
    }
}
