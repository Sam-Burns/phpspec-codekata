<?php

namespace spec\PhpSpecKata\Part5;

use PhpSpecKata\Part5\Printer;
use PhpSpecKata\Part5\RandomNumberGenerator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RandomNumberGeneratorSpec extends ObjectBehavior
{
    function let(Printer $printer)
    {
        $this->beConstructedWith($printer);
    }

    function it_can_pick_a_random_number()
    {
        $this->getRandomNumber()->shouldBeInt();
    }

    function it_can_print_the_random_number(Printer $printer)
    {
        $this->printRandomNumber();
        $printer->printSomething(Argument::type('int'))->shouldHaveBeenCalled();
    }
}
