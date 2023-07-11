<?php

namespace App\Service;

use App\Models\Article;

class SupplyArticle
{
    // TODO: articleData関数をRepository層を作ったら実装する

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
