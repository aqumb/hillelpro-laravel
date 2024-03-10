<?php

namespace App\GameSolid;

use App\GameSolid\PlaceInterface;

class DistanceCalculation implements DistanceCalculationInterface
{
    public function calculateDistances(array &$places, float $lat, float $lon): void
    {
        foreach ($places as &$place) {
            $res = 2 * asin(sqrt(pow(sin(($lat - $place->getLatitude()) / 2), 2) + cos($lat) * cos($place->getLatitude()) * pow(sin(($lon - $place->getLongitude()) / 2), 2)));
            $place->distance = $res;
        }
    }
}
