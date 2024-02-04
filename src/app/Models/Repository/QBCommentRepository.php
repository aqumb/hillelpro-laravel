<?php

namespace App\Models\Repository;

use App\Models\Interface\CommentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class QBCommentRepository implements CommentRepositoryInterface
{
    public function deleteComment($commentId) {
        DB::table('comments')->where('id', $commentId)->delete();
    }

    public function getCommentsByPostId($postId) {
        return DB::table('comments')->where('post_id', $postId)->get();
    }
}
