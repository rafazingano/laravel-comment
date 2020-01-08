<?PHP

namespace ConfrariaWeb\Comment\Services;

use ConfrariaWeb\Comment\Contracts\CommentContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class CommentService
{

    use ServiceTrait;

    public function __construct(CommentContract $comment)
    {
        $this->obj = $comment;
    }

}
