<?php

namespace App\Models\Interface;

interface PostRepositoryInterface
{
    public function getPostsByCategoryId($categoryId);
    public function getPostById($postId);
    public function updatePost($postId, array $data);
}
