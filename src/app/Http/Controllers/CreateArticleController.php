<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\CreateArticleDTO;
use App\Service\HandleArticleService;
use App\Models\LoggedUserDTO;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CreateArticleController
{
    public static function showPage(LoggedUserDTO $dto): Application | Factory | View
    {
        return view(
            view:'create_article'
            , data: [
                'username' => $dto->username
            ]
        );
    }

    public static function createArticle(CreateArticleDTO $dto): RedirectResponse | Redirector
    {
        $isSuccess = HandleArticleService::create(dto: $dto);
        if ($isSuccess) {
            // redirect to home page
            return redirect(
                to: '/?message=Article created successfully'
            );
        } else {
            // redirect to home page
            return redirect(
                to: '/?message=Article creation failed'
            );
        }
    }
}
