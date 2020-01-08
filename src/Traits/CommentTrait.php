<?php

namespace ConfrariaWeb\Comment\Traits;

trait CommentTrait
{
    public function comments()
    {
        return $this->morphMany('ConfrariaWeb\Comment\Models\Comment', 'commentable');
    }
}
