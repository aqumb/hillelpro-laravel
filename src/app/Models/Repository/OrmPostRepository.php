<?php

namespace App\Models\Repository;

use App\Models\Interface\PostRepositoryInterface;
use App\Models\Post;

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
}
