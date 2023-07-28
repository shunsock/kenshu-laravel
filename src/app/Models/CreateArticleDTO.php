<?php

declare(strict_types=1);

namespace App\Models;

final readonly class CreateArticleDTO
{
    public function __construct(
        public string $title,
        public string $thumbnail,
        public string $body,
        public string $author,
    ) {}
}
