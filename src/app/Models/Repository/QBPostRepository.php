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

    public function addCommentAndUpdateTimestamps($postId, $commentText) {
        return DB::transaction(function () use ($postId, $commentText) {
            DB::table('comments')->insert(['post_id' => $postId, 'text' => $commentText]);

            DB::table('posts')->where('id', $postId)->update(['updated_at' => now()]);

            $categoryId = DB::table('posts')->where('id', $postId)->value('category_id');
            DB::table('categories')->where('id', $categoryId)->update(['updated_at' => now()]);

            return true;
        });
    }
}
