<?php

namespace App\Models\Repository;

use App\Models\Interface\PostRepositoryInterface;
use App\Models\Post;
use App\Models\Comment;

class OrmPostRepository implements PostRepositoryInterface
{
    public function getPostsByCategoryId($categoryId) {
        return Post::where('category_id', $categoryId)->get();
    }

    public function getPostById($postId) {
        return Post::find($postId);
    }

    public function updatePost($postId, array $data) {
        Post::where('id', $postId)->update($data);
    }

    public function addCommentAndUpdateTimestamps($postId, $commentText) {
        return \DB::transaction(function () use ($postId, $commentText) {
            $post = Post::find($postId);
            $post->comments()->create(['content' => $commentText]);

            $post->touch();
            if ($post->category) {
                $post->category->touch();
            }

            return true;
        });
    }

    public function getLatestCommentsForPost($postId, $limit = 5) {
        return Comment::where('post_id', $postId)->orderBy('created_at', 'desc')->limit($limit)->get();
    }

}
