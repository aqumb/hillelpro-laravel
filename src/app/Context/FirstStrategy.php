<?php

namespace App\Context;

class FirstStrategy extends Strategy
{
    protected function formatProperty($name, $value): string
    {
        return "$name – $value" . "<br>";
    }
}
