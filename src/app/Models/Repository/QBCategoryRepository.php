<?php

namespace App\Models\Repository;

use App\Models\Interface\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;

class QBCategoryRepository implements CategoryRepositoryInterface
{
    public function getAllCategories() {
        return DB::table('categories')->get();
    }

    public function getCategoryById($categoryId) {
        return DB::table('categories')->where('id', $categoryId)->first();
    }

    public function createCategory(array $data) {
        return DB::table('categories')->insert($data);
    }
}
