<?php

namespace App\Context;

class SecondStrategy extends Strategy
{
    protected function formatProperty($name, $value): string
    {
        $formattedName = implode(' ', array_map(function ($word) {
            return lcfirst($word);
        }, preg_split('/(?=[A-Z])/', $name)));

        return "|$formattedName|$value|" . "<br>";
    }
}

