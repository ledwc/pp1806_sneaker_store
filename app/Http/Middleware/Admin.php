<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        $permission = auth()->user()->role->permission;

        if ($permission != config('roles.admin')) {
            return back()->with('status', __('user.not_permission'));
        }

        return $next($request);
    }
}
