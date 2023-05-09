<?php

namespace App\Broadcasting;

use App\Models\User;

use Illuminate\Auth\Access\Response;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkOrderChannel
{
    use AuthorizesRequests;

    public function join(Authenticatable $user, $orderId)
    {
        return $this->authorize();
    }

    public function authorize($request, Closure $next, $role, $permission)
    {
        if (! $request->user()->hasRole($role) || ! $request->user()->hasPermission($permission)) {
            
            return Response::deny('Unauthorized');
        }
        return Response::allow();
    }
}
