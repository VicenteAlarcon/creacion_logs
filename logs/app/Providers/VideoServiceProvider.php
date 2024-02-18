<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GetVideosService;
class VideoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(GetVideosService::class, function ($app) {
            return new GetVideosService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
