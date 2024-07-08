<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use App\Http\Middleware\CheckRole;

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
    public function boot(Router $router)
    {
        // Mendaftarkan middleware
        $router->aliasMiddleware('role', CheckRole::class);
    }
}
