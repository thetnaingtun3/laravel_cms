<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (! $user || $user->is_admin != 'admin') {
            return redirect('/');
        }

        if (Auth::check()) {
            if (Auth::user()->is_admin == 0) {
                return redirect()->back()->with('warning', 'You are not Admin yet!!');
            }
        }

        return $next($request);
    }
}
