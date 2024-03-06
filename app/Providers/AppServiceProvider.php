<?php

namespace App\Providers;

use App\repository\repoCreateEvent;
use App\services\Iservice\IserviceEventInterFace;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IserviceEventInterFace::class, repoCreateEvent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
