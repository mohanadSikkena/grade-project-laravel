<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use app\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
    

   

    public function boot()
{
    $this->registerPolicies();

    $this->registerPolicies();

    Gate::define('view-all', function ($user) {
    
        return $user->role->name === 'manger';
    });

    Gate::define('view-coordinator', function ($user) {
        return $user->role->name === 'coordinator';
    });

    Gate::define('view-engineer', function ($user) {
        return $user->role->name === 'engineer';
    });

    Gate::define('view-technician', function ($user) {
        return $user->role->name === 'technician';
    });
    
}

}