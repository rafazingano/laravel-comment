<?PHP

namespace ConfrariaWeb\Comment\Repositories;

use ConfrariaWeb\Comment\Contracts\CommentContract;
use ConfrariaWeb\Comment\Models\Comment;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class CommentRepository implements CommentContract
{

    use RepositoryTrait;

    function __construct(Comment $comment)
    {
        $this->obj = $comment;
    }

}
