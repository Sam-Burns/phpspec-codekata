<?php

namespace PhpSpecKata\Part3;

class Basket
{
    private Calculator $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param float[] $prices
     */
    public function getMessage(array $prices): string
    {
        if ($this->calculator->add($prices) > 25.00) {
            return 'Free shipping';
        }
        return 'Shipping costs a fiver.';
    }
}
