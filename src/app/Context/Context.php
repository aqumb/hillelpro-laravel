<?php

namespace App\Context;

class Context
{
    private $objects;
    private $strategy;

    public function __construct($objects)
    {
        $this->objects = $objects;
        return $this;
    }

    public function Strategy($strategy)
    {
        $this->strategy = $strategy;
        return $this;
    }

    public function formatData()
    {
        foreach ($this->objects as $object) {
            $this->strategy->ObjectData($object);
        }
        return $this->strategy->formatResult();
    }
}


