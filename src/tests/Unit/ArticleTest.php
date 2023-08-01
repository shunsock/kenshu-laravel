<?php

namespace tests\Unit;

use App\Models\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testArticleDataMustExist()
    {
        $article = new Article(
            id: 1,
            title: 'Test title',
            body: 'Test content',
            author: 'Test author',
            createdAt: '2021-01-01 00:00:00',
            updatedAt: '2021-01-01 00:00:00',
            image_path: 'test.jpg'
        );
        $this->assertSame(expected: $article->getId(), actual: 1);
        $this->assertSame(expected: $article->getTitle(), actual: 'Test title');
        $this->assertSame(expected: $article->getBody(), actual: 'Test content');
        $this->assertSame(expected: $article->getAuthor(), actual: 'Test author');
        $this->assertSame(expected: $article->getCreatedAt(), actual: '2021-01-01 00:00:00');
        $this->assertSame(expected: $article->getUpdatedAt(), actual: '2021-01-01 00:00:00');
        $this->assertSame(expected: $article->getImagePath(), actual: 'test.jpg');
    }
}
