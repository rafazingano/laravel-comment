<?php

namespace ConfrariaWeb\Comment\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CommentServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'comment');
        Blade::component('comment::components.comments', 'comments');
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
