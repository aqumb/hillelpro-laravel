<?php

namespace App\GameSolid;

interface FilterArrayInterface
{
    public function filterAndTransform(array $places): array;
}
