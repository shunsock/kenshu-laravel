<?php

namespace App\Service;

use App\Models\Article;
use App\Repository\ShowArticleRepository;

class SupplyArticle
{
    public static function articleData(): array
    {
        $articles =  ShowArticleRepository::getData();
        $articleData = [];
        $count = 0;
        foreach ($articles as $article) {
            $articleData[$count] = new Article(
                title: $article['title']
                , body: substr(string: $article['body'], offset: 0, length: 100)."..."
                , author: "admin"
                , createdAt: $article['created_at']
                , updatedAt: $article['updated_at']
                , image_path: $article['thumbnail']
            );
            $count++;
        }
        return $articleData;
    }

    /**
     * @return Article[]
     */
    public static function dummyArticleData(): array
    {
        return [
            new Article (
                title: '風船',
                body: '風船は空気を入れると膨らむ',
                author: '風船太郎',
                createdAt: '2021-01-01',
                updatedAt: '2021-01-01',
                image_path: 'image/test_image_balloon.jpg'
            ),
            new Article(
                title: '車',
                body: '車はタイヤが4つある',
                author: '車太郎',
                createdAt: '2021-01-01',
                updatedAt: '2021-01-01',
                image_path: 'image/test_image_car.jpg'
            ),
            new Article(
                title: 'バラ',
                body: 'バラは花の女王',
                author: 'バラ太郎',
                createdAt: '2021-01-01',
                updatedAt: '2021-01-01',
                image_path: 'image/test_image_rose.jpg'
            )
        ];
    }
}
