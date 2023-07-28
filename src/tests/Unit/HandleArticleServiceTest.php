<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\CreateArticleDTO;
use App\Service\HandleArticleService;
use Tests\TestCase;

class HandleArticleServiceTest extends TestCase
{
    public function testCreate()
    {
        $dto = new CreateArticleDTO(
            title: "test_title",
            thumbnail: "test_thumbnail.jpg",
            body: "test_body",
            author: "admin"
        );
        $res = HandleArticleService::create(dto: $dto);
        $this->assertSame(expected: true, actual: $res);
    }
}
