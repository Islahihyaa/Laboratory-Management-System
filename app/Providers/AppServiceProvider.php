<?php

namespace App\Providers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        //
=======
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrapFive();
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)
    }
}
