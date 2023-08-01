<?php

declare(strict_types=1);

namespace App\Models;

final readonly class ArticleEditPageDTO
{
    public string $id;
    public string $username;

    public function __construct(
        string $id,
        string $username
    )
    {
        $this->id = $id;
        $this->username = $username;
    }
}
