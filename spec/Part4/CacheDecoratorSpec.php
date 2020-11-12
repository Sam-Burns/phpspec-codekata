<?php

namespace spec\PhpSpecKata\Part4;

use PhpSpecKata\Part4\CacheDecorator;
use PhpSpec\ObjectBehavior;
use PhpSpecKata\Part4\DataSourceInterface;
use PhpSpecKata\Part4\File;
use PhpSpecKata\Part4\InMemoryCache;

class CacheDecoratorSpec extends ObjectBehavior
{
    function let(File $file, InMemoryCache $inMemoryCache)
    {
        $this->beConstructedWith($file, $inMemoryCache);
    }

    function it_is_a_data_source()
    {
        $this->shouldHaveType(DataSourceInterface::class);
    }

    function it_returns_from_the_cache(InMemoryCache $inMemoryCache)
    {
        $inMemoryCache->getData()->willReturn(42);
        $this->getData()->shouldReturn(42);
    }

    function it_writes_to_the_cache_and_returns_from_file(File $file, InMemoryCache $inMemoryCache)
    {
        $inMemoryCache->getData()->willThrow(\Exception::class);
        $file->getData()->willReturn(42);
        $inMemoryCache->setData(42)->willReturn(true);
        $this->getData()->shouldReturn(42);
    }
}
