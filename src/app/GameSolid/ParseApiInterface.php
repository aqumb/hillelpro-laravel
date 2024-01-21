<?php

namespace App\GameSolid;

interface ParseApiInterface
{
    public function searchPlaces(string $query, array $excludePlaceIds): array;
}
