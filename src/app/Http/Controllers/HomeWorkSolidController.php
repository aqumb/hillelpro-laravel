<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameSolid\SearchService;


class HomeWorkSolidController extends Controller
{
    private $SearchService;

    public function __construct(SearchService $locationSearchService)
    {
        $this->SearchService = $locationSearchService;
    }

    public function index(Request $request)
    {
        $search = 'Продукти Одеса';
        $lat = 46.4774700;
        $lon = 30.7326200;
        $excludePlaceIds = [];

        $places = $this->SearchService->searchAndProcessLocations($search, $lat, $lon, $excludePlaceIds);

        dd($places);
    }
}
