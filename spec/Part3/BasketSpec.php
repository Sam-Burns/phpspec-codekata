<?php

namespace spec\PhpSpecKata\Part3;

use PhpSpecKata\Part3\Basket;
use PhpSpec\ObjectBehavior;
use PhpSpecKata\Part3\Calculator;
use Prophecy\Argument;

class BasketSpec extends ObjectBehavior
{
    function let(Calculator $calculator)
    {
        $this->beConstructedWith($calculator);
    }

    function it_returns_free_shipping_message(Calculator $calculator)
    {
        $calculator->add([10.0, 16.0])->willReturn(26.0);

        $this->getMessage([10.0, 16.0])->shouldReturn('Free shipping');
    }
}
