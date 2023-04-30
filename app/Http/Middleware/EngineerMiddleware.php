<?php

namespace App\Http\Middleware;

use Closure;

class EngineerMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->hasRole('engineer')) {
            return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
        }
        $role = auth()->user()->role;
        $view = $request->route()->getName();

        $permissions = Permission::where('role', $role)->pluck('view')->toArray();

        if (!in_array($view, $permissions)) {
        return redirect()->route('permission.denied');
        }

        return $next($request);
    }
}
