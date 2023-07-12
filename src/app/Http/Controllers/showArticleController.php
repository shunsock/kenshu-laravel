<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Service\SupplyArticle;
use App\Service\Message;
use Dotenv\Exception\InvalidFileException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Nette\InvalidArgumentException;
use PDOException;

class showArticleController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public static function index(): Application|Factory|View
    {
        try {
            $articles = SupplyArticle::articleData();
            $message = Message::extract();
        } catch (InvalidFileException) {
            return view(
                view: 'homepage'
                , data: [
                    'message' => 'Internal Server Error: InvalidFileException'
                ]
            );
        } catch (InvalidArgumentException) {
            return view(
                view: 'homepage'
                , data: [
                    'message' => 'Internal Server Error: InvalidArgumentException'
                ]
            );
        } catch (PDOException){
            return view(
                view: 'homepage'
                , data: [
                    'message' => 'Internal Server Error: PDOException'
                ]
            )  ;
        }
        return view(
            view: 'homepage'
            , data: [
                'articles' => $articles,
                'message' => $message
            ]
        );
    }
}
