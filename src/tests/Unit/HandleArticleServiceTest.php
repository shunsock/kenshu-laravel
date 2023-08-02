<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\ArticleEditDTO;
use App\Models\CreateArticleDTO;
use App\Service\HandleArticleService;
use Tests\TestCase;

class HandleArticleServiceTest extends TestCase
{
    public function testSuccessArticleCreate()
    {
        $dto = new CreateArticleDTO(
            title: "test_title",
            thumbnail: "test_image_rose.jpg",
            body: "test_body",
            author: "admin"
        );
        $res = HandleArticleService::create(dto: $dto);
        $this->assertSame(expected: true, actual: $res);
    }

    public function testSuccessArticleEdit()
    {
        $dto = new ArticleEditDTO(
            id: "1",
            title: "test_title",
            body: "test_body",
        );
        $res = HandleArticleService::edit(
            dto: $dto
        );
        $this->assertSame(expected: true, actual: $res);
    }

    public function testSuccessArticleDelete()
    {
        $res = HandleArticleService::delete(id: 1);
        $this->assertSame(expected: true, actual: $res);
    }
}
