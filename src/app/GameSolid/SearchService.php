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

    public function searchAndProcessLocations($search, $lat, $lon, array $excludePlaceIds = []): array
    {
        $places = $this->locationSearch->searchPlaces($search, $excludePlaceIds);
        $this->distanceCalculator->calculateDistances($places, $lat, $lon);
        $this->placesSorter->sortByDistance($places);
        return $this->placesFilter->filterAndTransform($places);
    }
}
