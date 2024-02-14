<?php

namespace App\Http\Controllers;

use App\Models\Interface\CategoryRepositoryInterface;
use App\Models\Category;

class BlogController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function getBlog() {
        $categories = $this->categoryRepository->getAllCategories();

        return [
            'categories' => $categories,
        ];
    }

    public function getBlogWithComments()
    {
        $categories = Category::with('comments')->get();

        return [
            'categories' => $categories,
        ];
    }
}
