<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckUsernameAndImage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): RedirectResponse | Closure | Response
    {
        if (!$request->session()->has(key: 'username')) {
            // redirect to the specific route if 'username' does not exist in the session
            return redirect(to: "/login");
        }
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = $request->session()->get(key: 'username').$request->image->extension();

        return $next($request, $imageName);
    }
}
