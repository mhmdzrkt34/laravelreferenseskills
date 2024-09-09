<?php

namespace App\Providers;

use App\Services\Post\IPostService;
use App\Services\Post\PostService;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->app->bind(IPostService::class,PostService::class);
    }
}
