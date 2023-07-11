<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DummyArticle extends Controller
{
    /**
     * @return Article[]
     */
    private static function supplyDummyArticle(): array
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

    /**
     * @return Application|Factory|View
     */
    public static function index(): Application|Factory|View
    {
        return view(
            view: 'homepage'
            , data: [
                'articles' => self::supplyDummyArticle()
            ]
        );
    }
}
