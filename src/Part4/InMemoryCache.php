<?php

namespace PhpSpecKata\Part4;

class InMemoryCache implements DataSourceInterface
{
    private ?int $data;

    public function getData(): int
    {
        if (is_int($this->data)) {
            return $this->data;
        }
        throw new \Exception('Cache miss');
    }

    public function setData(int $data): bool
    {
        $this->data = $data;
        return true;
    }
}
