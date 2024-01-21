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
        $this->SearchService->searchAndProcessLocations($request);
    }
}
