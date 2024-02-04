<?php

namespace App\Http\Controllers;

use App\Models\Interface\CategoryRepositoryInterface;

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
}
