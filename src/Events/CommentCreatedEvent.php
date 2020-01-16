<?php

namespace ConfrariaWeb\Comment\Events;

use ConfrariaWeb\Comment\Historics\CommentCreatedHistoric;
use ConfrariaWeb\Comment\Models\Comment;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CommentCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $comment;

    /**
     * Create a new event instance.
     *
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        $this->obj = $comment->commentable;
        $this->historic = new CommentCreatedHistoric($comment);

        //$this->comment = $comment;
        //$historicClass = class_historic($this->obj, 'CommentCreated'); //namespace obj do historico
        //$this->historic = new $historicClass($this->obj, $comment); //chamada obj do historico
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
