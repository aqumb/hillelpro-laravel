<?php

namespace App\GameSolid;

interface SortDistanceInterface
{
    public function sortByDistance(array &$places): void;
}
