<?php

namespace App\Http\Controllers;

use App\Models\Interface\PostRepositoryInterface;
use App\Models\Interface\CommentRepositoryInterface;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    protected $postRepository;
    protected $commentRepository;

    public function __construct(PostRepositoryInterface $postRepository, CommentRepositoryInterface $commentRepository) {
        $this->postRepository = $postRepository;
        $this->commentRepository = $commentRepository;
    }

    public function addCommentAndUpdateTimestamps(Request $request, $postId, $commentText) {
        $this->postRepository->addCommentAndUpdateTimestamps($postId, $commentText);

        return response()->json(['status' => 'success', 'message' => 'Comment added and timestamps updated successfully']);
    }

    public function getPosts($categoryId, $postId) {
        $post = $this->postRepository->getPostById($postId);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found']);
        }

        $comments = $this->commentRepository->getCommentsByPostId($postId);

        return [
            'post' => $post,
            'comments' => $comments,
        ];
    }

    public function updatePost(Request $request, $postId, $title, $content) {
        $post = $this->postRepository->getPostById($postId);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found']);
        }

        $data = [
            'title' => $title,
            'content' => $content,
        ];

        $this->postRepository->updatePost($postId, $data);

        return response()->json(['status' => 'success', 'message' => 'Post updated successfully']);
    }
}
