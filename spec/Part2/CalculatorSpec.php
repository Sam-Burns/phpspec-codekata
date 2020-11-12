<?php

namespace spec\PhpSpecKata\Part2;

use PhpSpecKata\Part2\Calculator;
use PhpSpec\ObjectBehavior;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_can_add_two_numbers_together()
    {
        $this->add(1, 2)->shouldBe(3.0);
    }
}
