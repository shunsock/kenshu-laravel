<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Service\SupplyArticle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class showArticleController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public static function index(): Application|Factory|View
    {
        return view(
            view: 'homepage'
            , data: [
                'articles' => SupplyArticle::dummyArticleData()
            ]
        );
    }
}
