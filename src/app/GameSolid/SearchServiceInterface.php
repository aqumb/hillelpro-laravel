<?php

namespace App\GameSolid;

interface SearchServiceInterface
{
    public function searchAndProcessLocations($request): void;
}
