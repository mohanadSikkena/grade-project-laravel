<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleAndPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    

    public function handle($request, Closure $next, $role, $permission)
    {
        if (! $request->user()->hasRole($role) || ! $request->user()->hasPermission($permission)) {
            abort(403, 'Unauthorized');
           
        }
        
        return $next($request);
    }


}
