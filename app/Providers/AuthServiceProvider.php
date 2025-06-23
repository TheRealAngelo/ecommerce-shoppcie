<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Define the 'admin' gate
        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        // Define the 'seller' gate
        Gate::define('seller', function (User $user) {
            return $user->role === 'seller';
        });
    }
}