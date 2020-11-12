<?php

namespace PhpSpecKata\Part5;

class RandomNumberGenerator
{
    private Printer $printer;

    public function __construct(Printer $printer)
    {
        $this->printer = $printer;
    }

    public function getRandomNumber(): int
    {
        return rand(1, 10);
    }

    public function printRandomNumber()
    {
        $rand = $this->getRandomNumber();
        $this->printer->printSomething($rand);
    }
}
