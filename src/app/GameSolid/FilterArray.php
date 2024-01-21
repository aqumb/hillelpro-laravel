<?php

namespace App\GameSolid;

class FilterArray implements FilterArrayInterface
{
    private array $properties = ['place_id', 'name', 'display_name', 'distance'];

    public function filterAndTransform(array $places): array
    {
        $filteredPlaces = [];

        foreach ($places as $place) {
            $filteredPlace = (object) array_intersect_key((array) $place, array_flip($this->properties));
            $filteredPlaces[$place->place_id] = $filteredPlace;
        }

        return $filteredPlaces;
    }
}
