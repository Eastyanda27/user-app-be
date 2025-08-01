<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Nothing to register
    }

    public function boot(): void
    {
        // API Routes
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // Web Routes
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
