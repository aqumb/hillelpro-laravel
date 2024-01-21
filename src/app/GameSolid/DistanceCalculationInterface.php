<?php

namespace App\GameSolid;

interface DistanceCalculationInterface
{
    public function calculateDistances(array &$places, float $lat, float $lon): void;
}
