<?php

namespace App\GameSolid;

interface PlaceInterface
{
    public function getLatitude(): float;
    public function getLongitude(): float;
}
