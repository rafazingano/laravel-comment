<?php

namespace ConfrariaWeb\Comment\Providers;

use ConfrariaWeb\Historic\Listeners\HistoricListener;
use ConfrariaWeb\Comment\Events\CommentCreatedEvent;
use ConfrariaWeb\Comment\Events\CommentUpdatedEvent;
use ConfrariaWeb\Comment\Events\CommentDeletedEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class CommentEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        CommentCreatedEvent::class => [
            HistoricListener::class,
        ],
        CommentUpdatedEvent::class => [
            HistoricListener::class,
        ],
        CommentDeletedEvent::class => [
            HistoricListener::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
