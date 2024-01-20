<?php

namespace App\Context;

interface StrategyInterface
{
    public function ObjectData(array $object);
    public function formatResult();
}
