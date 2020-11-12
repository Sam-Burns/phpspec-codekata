<?php

namespace PhpSpecKata\Part4;

class CacheDecorator implements DataSourceInterface
{
    private File $file;
    private InMemoryCache $inMemoryCache;

    public function __construct(File $file, InMemoryCache $inMemoryCache)
    {
        $this->file = $file;
        $this->inMemoryCache = $inMemoryCache;
    }

    public function getData(): int
    {
        try {
            return $this->inMemoryCache->getData();
        } catch (\Exception $e) {
            $data = $this->file->getData();
            $this->inMemoryCache->setData($data);
            return $data;
        }
    }
}
