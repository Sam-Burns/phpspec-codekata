<?php

namespace spec\PhpSpecKata\Part1;

use PhpSpecKata\Part1\Calculator;
use PhpSpec\ObjectBehavior;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_does_a_simple_division()
    {
        $this->divide(1, 4)->shouldBe(0.25);
    }

    function it_throws_exception_on_div0()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('divide', [1, 0]);
    }
}
