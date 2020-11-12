<?php

namespace PhpSpecKata\Part4;

class File implements DataSourceInterface
{
    public function getData(): int
    {
        $fileContents = file_get_contents(__DIR__ . '/data.txt');
        return (int) $fileContents;
    }
}