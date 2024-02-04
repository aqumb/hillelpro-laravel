<?php

namespace App\Models\Repository;

use App\Models\Interface\CommentRepositoryInterface;
use App\Models\Comment;

class OrmCommentRepository implements CommentRepositoryInterface
{
    public function deleteComment($commentId) {
        Comment::destroy($commentId);
    }

    public function getCommentsByPostId($postId) {
        return Comment::where('post_id', $postId)->get();
    }
}
