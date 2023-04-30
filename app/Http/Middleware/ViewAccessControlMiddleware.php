<?php

use Closure;

class ViewAccessControlMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = auth()->user();
        $view = $request->route()->getName();

        // Define the ACL for each role
        $acl = [
            'coordinator' => ['dashboard', 'profile', 'users', 'settings'],
            'manager' => ['dashboard', 'profile', 'users'],
            'engineer' => ['dashboard', 'profile'],
            'worker' => ['dashboard'],
            'technichian' => ['dashboard', 'profile', 'users', 'settings'],
        ];

        // Check if the user's role is allowed to access the requested view
        if (!in_array($view, $acl[$user->role])) {
            return response()->view('errors.403', [], 403);
        }

        return $next($request);
    }
}

