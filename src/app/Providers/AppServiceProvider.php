<?php

namespace App\Providers;

use App\GameSolid\DistanceCalculationInterface;
use App\GameSolid\FilterArrayInterface;
use App\GameSolid\FilterArray;
use App\GameSolid\ParseApiInterface;
use App\GameSolid\ParseApi;
use App\GameSolid\DistanceCalculation;
use App\GameSolid\SortDistanceInterface;
use App\GameSolid\SortDistance;
use App\Models\Interfaces\BlogCategoryInterface;
use App\Models\BlogCategory;
use App\Models\Interfaces\BlogCommentInterface;
use App\Models\BlogComment;
use App\Models\Interfaces\BlogPostInterface;
use App\Models\BlogPost;
use App\Models\Repository\QBCategoryRepository;
use App\Models\Repository\QBCommentRepository;
use App\Models\Repository\QBPostRepository;
use Illuminate\Support\ServiceProvider;
use App\Models\Interface\CategoryRepositoryInterface;
use App\Models\Repository\OrmCategoryRepository;
use App\Models\Interface\PostRepositoryInterface;
use App\Models\Repository\OrmPostRepository;
use App\Models\Interface\CommentRepositoryInterface;
use App\Models\Repository\OrmCommentRepository;
use App\Models\Repository\OrmUrlRepository;
use App\Models\Interface\UrlRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ParseApiInterface::class, ParseApi::class);
        $this->app->bind(DistanceCalculationInterface::class, DistanceCalculation::class);
        $this->app->bind(SortDistanceInterface::class, SortDistance::class);
        $this->app->bind(FilterArrayInterface::class, FilterArray::class);

        $this->app->bind(CategoryRepositoryInterface::class, OrmCategoryRepository::class);
        $this->app->bind(PostRepositoryInterface::class, OrmPostRepository::class);
        $this->app->bind(CommentRepositoryInterface::class, OrmCommentRepository::class);

        $this->app->bind(UrlRepositoryInterface::class, OrmUrlRepository::class);
//        $this->app->bind(CategoryRepositoryInterface::class, QBCategoryRepository::class);
//        $this->app->bind(PostRepositoryInterface::class, QBPostRepository::class);
//        $this->app->bind(CommentRepositoryInterface::class, QBCommentRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
