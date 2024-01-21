<?php

namespace App\GameSolid;

class SortDistance implements SortDistanceInterface
{
    public function sortByDistance(array &$places): void
    {
        usort($places, function ($a, $b) {
            return ($a->distance < $b->distance) ? -1 : 1;
        });
    }
}
