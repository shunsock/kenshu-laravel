<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ArticleEditDTO;
use App\Models\ArticleEditPageDTO;
use App\Service\HandleArticleService;
use App\Service\SearchErrorMessage;
use App\Service\SupplyArticle;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use PDOException;

class EditArticleController
{

    public static function showArticleById(ArticleEditPageDTO $dto): View | Application|RedirectResponse|Redirector
    {
        try {
            $article = SupplyArticle::articleDataById(id: $dto->id);
            return view(
                view: 'edit_page'
                , data: [
                    'article' => $article,
                    'username' => $dto->username
                ]
            );
        } catch (PDOException) {
            $errorMessage = SearchErrorMessage::errorMessages['PDOException'];
            return view(
                view: 'homepage'
                , data: [
                    'message' => $errorMessage
                ]
            );
        }
    }

    public static function editArticle(ArticleEditDTO $dto): Redirector|RedirectResponse|Application|View
    {
        try {
            HandleArticleService::edit(
               dto: $dto
            );
            return redirect(
                to: '/'
            );
        } catch (PDOException) {
            return redirect(
                to: '/edit_article?id=' . $dto->id
            );
        }
    }
}
