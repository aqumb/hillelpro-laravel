<?php

namespace App\Http\Controllers;

use App\Models\Interface\CommentRepositoryInterface;
class BlogCommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository) {
        $this->commentRepository = $commentRepository;
    }

    public function deleteComment($commentId) {
        $this->commentRepository->deleteComment($commentId);

        // Возвращаем успешный ответ или что-то еще
        return response()->json(['status' => 'success', 'message' => 'Comment deleted successfully']);
    }
}
