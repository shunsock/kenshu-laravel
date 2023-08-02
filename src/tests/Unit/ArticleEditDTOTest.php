<?php

namespace Unit;

use App\Models\ArticleEditDTO;
use PHPUnit\Framework\TestCase;

class ArticleEditDTOTest extends TestCase
{
    public function testArticleEditDTO()
    {
        $dto = new ArticleEditDTO(
            id: '1',
            title: 'title',
            body: 'body',
        );
        $this->assertSame(expected: $dto->id, actual: '1');
        $this->assertSame(expected: $dto->title, actual: 'title');
        $this->assertSame(expected: $dto->body, actual: 'body');
    }
}
