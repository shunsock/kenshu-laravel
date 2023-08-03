<?php

namespace Unit;

use App\Models\ArticleEditPageDTO;
use PHPUnit\Framework\TestCase;

class ArticleEditPageDTOTest extends TestCase
{
    public function testArticleEditPageDTO()
    {
        $dto = new ArticleEditPageDTO(
            id: '1',
            username: 'username',
        );
        $this->assertSame(expected: $dto->id, actual: '1');
        $this->assertSame(expected: $dto->username, actual: 'username');
    }
}
