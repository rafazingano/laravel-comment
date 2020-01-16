<?php

namespace ConfrariaWeb\Comment\Historics;

use ConfrariaWeb\Comment\Models\Comment;
use ConfrariaWeb\Historic\Contracts\HistoricContract;

class CommentCreatedHistoric implements HistoricContract
{
    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function data()
    {
        return [
            'action' => 'created',
            'content' => 'Criado seguinte comentário:  ' . $this->comment->content
        ];
    }

    public function title()
    {
        return 'Comentário criado';
    }

    public function user($collunn = null)
    {
        if($collunn == 'id'){
            return auth()->id();
        }
        return auth()->user();
    }
}
