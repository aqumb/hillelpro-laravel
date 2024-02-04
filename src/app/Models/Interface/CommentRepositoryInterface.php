<?php

namespace App\Models\Interface;

interface CommentRepositoryInterface
{
    public function deleteComment($commentId);
    public function getCommentsByPostId($postId);
}
