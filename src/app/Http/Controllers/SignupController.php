<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\SignupDTO;
use App\Service\SignupService;
use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use InvalidArgumentException;
use PDOException;

class SignupController extends Controller
{
    /**
     * @return View
     */
    public static function showSignupPage(): View
    {
        $message = "";
        return view(
            view:'signup'
            , data: [
                'message' => $message
            ]
        );
    }

    public static function SignupUser(SignupDTO $dto): Application|RedirectResponse|Redirector
    {
        try {
            SignupService::SignupUser($dto);
            session()->put('username', $dto->inputtedUserName);

            // redirect
            return redirect(to: '/');
        } catch (InvalidArgumentException) {
            return redirect(
                to: '/signup'
            );
        } catch (PDOException) {
            return redirect(
                to: '/signup'
            );
        }
    }
}
