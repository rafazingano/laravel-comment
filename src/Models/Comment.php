<?php

namespace ConfrariaWeb\Comment\Models;

use ConfrariaWeb\Historic\Traits\HistoricTrait;
use Illuminate\Database\Eloquent\Model;
use ConfrariaWeb\Comment\Scopes\CommentOrderScope;

class Comment extends Model
{

    use HistoricTrait;

    protected $fillable = [
        'user_id',
        'content'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new CommentOrderScope);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
