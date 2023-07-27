<?php

declare(strict_types=1);

namespace tests\Unit;

use App\Models\CreateArticleDTO;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

class CreateArticleDTOTest extends TestCase
{
    public function testConstructor(): void
    {
        $dto = new CreateArticleDTO(
            title: 'title',
            thumbnail: 'thumbnail.jpg',
            body: 'body',
            author: 'username'
        );
        assertSame(
            expected: 'username',
            actual: $dto->author
        );
        assertSame(
            expected: 'title',
            actual: $dto->title
        );
        assertSame(
            expected: 'body',
            actual: $dto->body
        );
        assertSame(
            expected: 'thumbnail.jpg',
            actual: $dto->thumbnail
        );
    }
}
