<?php

namespace App\GameSolid;

class FilterArray implements FilterArrayInterface
{
    private array $properties = ['place_id', 'name', 'display_name', 'distance'];

    public function __construct(array $properties = null)
    {
        if (!empty($properties)) {
            $this->properties = $properties;
        }
    }

    public function setProperties(array $properties)
    {
        $this->properties = $properties;
    }

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
