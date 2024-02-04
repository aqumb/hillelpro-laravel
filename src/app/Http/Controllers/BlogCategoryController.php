<?php

namespace App\Http\Controllers;

use App\Models\Interface\CategoryRepositoryInterface;
use App\Models\Interface\PostRepositoryInterface;
use Illuminate\Http\Request;
class BlogCategoryController extends Controller
{
    protected $categoryRepository;
    protected $postRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository, PostRepositoryInterface $postRepository) {
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    public function getCategories($categoryId) {
        $currentCategory = $this->categoryRepository->getCategoryById($categoryId);
        $posts = $this->postRepository->getPostsByCategoryId($categoryId);

        return [
            'currentCategory' => $currentCategory,
            'posts' => $posts,
        ];
    }

    public function addCategory(Request $request, $categoryName) {
        $this->categoryRepository->createCategory(['name' => $categoryName]);
        return response()->json(['status' => 'success', 'message' => 'Category added successfully']);
    }
}
