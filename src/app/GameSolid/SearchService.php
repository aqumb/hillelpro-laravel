<?php

namespace App\GameSolid;

class SearchService
{
    private $locationSearch;
    private $distanceCalculator;
    private $placesSorter;
    private $placesFilter;

    public function __construct(
        ParseApiInterface $locationSearch,
        DistanceCalculationInterface $distanceCalculator,
        SortDistanceInterface $placesSorter,
        FilterArrayInterface $placesFilter
    ) {
        $this->locationSearch = $locationSearch;
        $this->distanceCalculator = $distanceCalculator;
        $this->placesSorter = $placesSorter;
        $this->placesFilter = $placesFilter;
    }

    public function searchAndProcessLocations($request)
    {
        $search = 'Продукти Одеса';
        $lat = 46.4774700;
        $lon = 30.7326200;
        $excludePlaceIds = [];

        while (true) {
            $places = $this->locationSearch->searchPlaces($search, $excludePlaceIds);
            $this->distanceCalculator->calculateDistances($places, $lat, $lon);
            $this->placesSorter->sortByDistance($places);
            $places = $this->placesFilter->filterAndTransform($places);

            if ($excludePlaceIds) {
                dd($places);
            }

            $excludePlaceIds = array_keys($places);
            dump($places);
        }
    }
}
