<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
=======
<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
=======
use Illuminate\Support\Facades\Gate;
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
<<<<<<< HEAD
        //
=======
<<<<<<< HEAD
        //
=======
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super admin') ? true : null;
        });
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)
    }
}
