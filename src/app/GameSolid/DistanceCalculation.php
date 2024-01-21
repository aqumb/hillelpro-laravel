<?php

namespace App\GameSolid;

class DistanceCalculation implements DistanceCalculationInterface
{
    public function calculateDistances(array &$places, float $lat, float $lon): void
    {
        foreach ($places as $place) {
            $res = 2 * asin(sqrt(pow(sin(($lat - $place->lat) / 2), 2) + cos($lat) * cos($place->lat) * pow(sin(($lon - $place->lon) / 2), 2)));
            $place->distance = $res;
        }
    }
}
