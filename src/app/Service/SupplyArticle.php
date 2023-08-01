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
                id: $article['id']
                , title: $article['title']
                , body: substr(string: $article['body'], offset: 0, length: 100)."..."
                , author: $article['user_name']
                , createdAt: $article['created_at']
                , updatedAt: $article['updated_at']
                , image_path: $article['thumbnail']
            );
            $count++;
        }
        return $articleData;
    }


    public static function articleDataById(string $id): Article
    {
        $article = ShowArticleRepository::getDataById($id);
        return new Article(
            id: $article['id']
            , title: $article['title']
            , body: $article['body']
            , author: $article['user_name']
            , createdAt: $article['created_at']
            , updatedAt: $article['updated_at']
            , image_path: $article['thumbnail']
        );
    }
}
