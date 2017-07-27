<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Model\UserAdapter as User;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('front.quiz.new');
        }

        $user = User::find(Auth::id());

        if (!$user->isAdmin()) {
            return redirect()->route('front.quiz.new');
        }

        return $next($request);
    }
}
