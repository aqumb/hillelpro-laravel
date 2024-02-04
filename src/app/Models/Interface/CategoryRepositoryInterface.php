<?php

namespace App\Models\Interface;

interface CategoryRepositoryInterface
{
    public function getAllCategories();
    public function getCategoryById($categoryId);
    public function createCategory(array $data);
}
