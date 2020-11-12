<?php

namespace PhpSpecKata\Part3;

class Calculator
{
    public function add(array $args): float
    {
        $total = 0.0;
        foreach ($args as $arg) {
            $total += (float) $arg;
        }
        return $total;
    }
}
