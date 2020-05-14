<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Post\PostRepositoryInterface::class,
            \App\Repositories\Post\PostRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Post\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Post\Category\CategoryRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Slider\SliderRepositoryInterface::class,
            \App\Repositories\Slider\SliderRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Photo\PhotoRepositoryInterface::class,
            \App\Repositories\Photo\PhotoRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
