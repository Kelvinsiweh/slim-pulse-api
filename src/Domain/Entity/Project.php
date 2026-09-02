<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use JsonSerializable;

final class Project implements JsonSerializable
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $category,
        public readonly string $status,
        public readonly string $createdAt
    ) {}

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'status' => $this->status,
            'createdAt' => $this->createdAt,
        ];
    }
}
