<?php

namespace App\Providers;

use App\Services\Impl\PostServiceImpl;
use App\Services\Impl\ProfileServiceImpl;
use App\Services\PostService;
use App\Services\ProfileService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProfileService::class, ProfileServiceImpl::class);
        $this->app->bind(PostService::class, PostServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
