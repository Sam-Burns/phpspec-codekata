<?php

namespace PhpSpecKata\Part1;

class Calculator
{
    public function divide(float $numerator, float $denominator): float
    {
        if ($denominator != 0) {
            return $numerator / $denominator;
        }
        throw new \InvalidArgumentException('Div zero error');
    }
}
