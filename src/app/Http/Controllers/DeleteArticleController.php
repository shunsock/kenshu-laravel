<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Service\HandleArticleService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class DeleteArticleController
{
    public static function run(string $id): Redirector|Application|RedirectResponse
    {
        $success = HandleArticleService::delete(id: $id);
        if ($success) {
            return redirect(to: '/');
        } else {
            return redirect(to: '/article?id=' . $id);
        }
    }
}
