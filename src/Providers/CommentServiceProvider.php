<?php

namespace ConfrariaWeb\Comment\Providers;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'comment');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

}
