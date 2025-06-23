<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Only redirect admins and sellers to their dashboards
                $user = Auth::guard($guard)->user();
                
                if ($user->role === 'admin') {
                    return redirect('/admin/dashboard');
                } elseif ($user->role === 'seller') {
                    return redirect('/seller/dashboard');
                } else {
                    return redirect('/'); // Redirect customers to homepage
                }
            }
        }

        return $next($request);
    }
}