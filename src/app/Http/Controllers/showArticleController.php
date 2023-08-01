<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\ArticlePageDTO;
use App\Service\SearchErrorMessage;
use App\Service\SupplyArticle;
use App\Models\HomePageDTO;
use Dotenv\Exception\InvalidFileException;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Nette\InvalidArgumentException;
use PDOException;

class showArticleController extends Controller
{
    /**
     * @param HomePageDTO $dto
     * @return View|Application|RedirectResponse|Redirector
     */
    public static function index(HomePageDTO $dto): View | Application|RedirectResponse|Redirector
    {
        if (session('username') === null) {
            return redirect(
                to: '/login'
            );
        }
        try {
            $articles = SupplyArticle::articleData();
        } catch (InvalidFileException) {
            $errorMessage = SearchErrorMessage::errorMessages['InvalidFileException'];
            return view(
                view: 'homepage'
                , data: [
                    'message' => $errorMessage
                ]
            );
        } catch (InvalidArgumentException) {
            $errorMessage = SearchErrorMessage::errorMessages['InvalidArgumentException'];
            return view(
                view: 'homepage'
                , data: [
                    'message' => $errorMessage
                ]
            );
        } catch (PDOException){
            $errorMessage = SearchErrorMessage::errorMessages['PDOException'];
            return view(
                view: 'homepage'
                , data: [
                    'message' => $errorMessage
                ]
            )  ;
        }
        return view(
            view: 'homepage'
            , data: [
                'articles' => $articles,
                'message' => $dto->message
            ]
        );
    }


    public static function showArticleById(ArticlePageDTO $dto): View | Application|RedirectResponse|Redirector
    {
        try {
            $article = SupplyArticle::articleDataById(id: $dto->id);
            return view(
                view: 'article_page'
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
            )  ;
        }
    }
}
