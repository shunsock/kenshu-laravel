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
            title: 'Test title',
            body: 'Test content',
            author: 'Test author',
            createdAt: '2021-01-01 00:00:00',
            updatedAt: '2021-01-01 00:00:00',
            image_path: 'test.jpg'
        );
        $this->assertTrue(condition: $article->getTitle() === 'Test title');
        $this->assertTrue(condition: $article->getBody() === 'Test content');
        $this->assertTrue(condition: $article->getAuthor() === 'Test author');
        $this->assertTrue(condition: $article->getCreatedAt() === '2021-01-01 00:00:00');
        $this->assertTrue(condition: $article->getUpdatedAt() === '2021-01-01 00:00:00');
        $this->assertTrue(condition: $article->getImagePath() === 'test.jpg');
    }
}
