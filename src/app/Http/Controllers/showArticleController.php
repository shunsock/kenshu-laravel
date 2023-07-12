<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Service\SupplyArticle;
use Dotenv\Exception\InvalidFileException;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Nette\InvalidArgumentException;
use PDOException;

class showArticleController extends Controller
{
    /**
     * @param Request $req
     * @return View
     */
    public static function index(Request $req): View
    {
        try {
            $articles = SupplyArticle::articleData();

            // if message does not exist return ''
            $message = $req->query(
                key: 'message',
                default: ''
            );

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
