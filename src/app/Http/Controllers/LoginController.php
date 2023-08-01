<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Service\LoginService;
use App\Models\AuthDTO;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
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
     * @param AuthDTO $dto
     * @return Application|RedirectResponse|Redirector
     */
    public static function login(AuthDTO $dto): Application|RedirectResponse|Redirector
    {
        try {
            $success = LoginService::login($dto);
            if ($success){
                session()->put('username', $dto->inputtedNameFromForm);
                return redirect(
                    to: '/'
                );
            } else {
                return redirect(
                    to: '/login'
                );
            }
        } catch (InvalidArgumentException) {
            return redirect(
                to: '/login'
            );
        } catch (PDOException) {
            return redirect(
                to: '/login'
            );
        }
    }
}
