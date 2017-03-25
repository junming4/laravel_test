<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Blog\TypeRepository::class, \App\Repositories\Blog\TypeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Blog\ArticleRepository::class, \App\Repositories\Blog\ArticleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Blog\TagRepository::class, \App\Repositories\Blog\TagRepositoryEloquent::class);
        //:end-bindings:
    }
}
