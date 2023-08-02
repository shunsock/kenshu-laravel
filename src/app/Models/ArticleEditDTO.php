<?php

namespace App\Models;

final readonly class ArticleEditDTO
{
    public function __construct(
        public string $id,
        public string $title,
        public string $body,
    ) {}
}
