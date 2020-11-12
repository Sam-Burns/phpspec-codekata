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

//    function it_does_a_simple_division()
//    {
//        $this->divide(???, ???)->shouldBe(???);
//    }
}
