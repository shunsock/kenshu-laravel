<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\SignupDTO;
use App\Service\SearchErrorMessage;
use App\Service\SignupService;
use Illuminate\Contracts\View\View;
use InvalidArgumentException;
use PDOException;

class SignupController extends Controller
{
    /**
     * @return View
     */
    public static function showSignupPage(): View
    {
        $message = session(key: "message") ? session(key: "message") : "";
        session()->flush('message');
        return view(
            view:'signup'
            , data: [
                'message' => $message
            ]
        );
    }

    public static function SignupUser(SignupDTO $dto): void
    {
        try {
            SignupService::SignupUser($dto);

            // assign user data to session
            session()->put('username', $dto->inputtedUserName);

            // redirect
            redirect(
                to: '/'
            );
        } catch (InvalidArgumentException) {
            session()->put(
                'message',
                SearchErrorMessage::errorMessages['InvalidArgumentException'].": この名前は使えません"
            );
            redirect(
                to: '/signup'
            );
        } catch (PDOException) {
            session()->put(
                'message',
                SearchErrorMessage::errorMessages['PDOException'].": データの送受信に失敗しました"
            );
            redirect(
                to: '/signup'
            );
        }
    }
}
