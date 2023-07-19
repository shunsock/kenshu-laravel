<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Service\SearchErrorMessage;
use App\Service\LoginService;
use App\Models\LoggingDTO;
use Illuminate\Contracts\View\View;
use PDOException;
use InvalidArgumentException;

class LoginController
{
    /**
     * @return View
     */
    public static function showLoginPage(): View
    {
        $message = "";
        return view(
            view:'login'
            , data: [
                'message' => $message
            ]
        );
    }


    /**
     * @param LoggingDTO $dto
     * @return void
     */
    public static function login(LoggingDTO $dto): void
    {
        try {
            $success = LoginService::login($dto);
            if ($success){
                session()->put('username', $dto->inputtedNameFromForm);
                redirect(
                    to: '/'
                );
            } else {
//                session()->put(
//                    'message',
//                    "ログインに失敗しました"
//                );
                redirect(
                    to: '/login'
                );
            }
        } catch (InvalidArgumentException) {
//            session()->put(
//                'message',
//                SearchErrorMessage::errorMessages['InvalidArgumentException'].": この名前は使えません"
//            );
            redirect(
                to: '/login'
            );
        } catch (PDOException) {
//            session()->put(
//                'message',
//                SearchErrorMessage::errorMessages['PDOException'].": データの送受信に失敗しました"
//            );
            redirect(
                to: '/login'
            );
        }
    }
}
