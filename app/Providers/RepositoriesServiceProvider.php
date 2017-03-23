<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
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
        //
        $this->registerBindings();
    }

    public function registerBindings()
    {
        $this->app->bind('App\Repositories\Blog\ArticleRepository', 'App\Repositories\Blog\ArticleRepositoryEloquent');
    }
}
