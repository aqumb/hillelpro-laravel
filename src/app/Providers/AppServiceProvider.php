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
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
