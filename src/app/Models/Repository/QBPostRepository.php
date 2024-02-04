<?php

namespace App\Models\Repository;

use App\Models\Interface\PostRepositoryInterface;
use Illuminate\Support\Facades\DB;
class QBPostRepository implements PostRepositoryInterface
{
    public function getPostsByCategoryId($categoryId) {
        return DB::table('posts')->where('category_id', $categoryId)->get();
    }

    public function getPostById($postId) {
        return DB::table('posts')->find($postId);
    }

    public function updatePost($postId, array $data) {
        DB::table('posts')->where('id', $postId)->update($data);
        return $this->getPostById($postId);
    }
}
