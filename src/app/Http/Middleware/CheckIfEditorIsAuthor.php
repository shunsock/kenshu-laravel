<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckIfEditorIsAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $article_author = $request->query(key: 'author');
        $logged_in_user = $request->session()->get(key: 'username');
        if ($article_author !== $logged_in_user) {
            return redirect(to: '/article?id='.$request->query(key: 'id'))->with(key: 'error', value: 'You are not the author of this article');
        }
        return $next($request);
    }
}
