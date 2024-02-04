<?php

namespace App\Models\Repository;

use App\Models\Interface\CategoryRepositoryInterface;
use App\Models\Category;

class OrmCategoryRepository implements CategoryRepositoryInterface
{
    public function getAllCategories() {
        return Category::all();
    }

    public function getCategoryById($categoryId) {
        return Category::find($categoryId);
    }

    public function createCategory(array $data) {
        return Category::create($data);
    }
}
