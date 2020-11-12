# Part 4

We need a cache decorator for these two data sources. Use PhpSpec to do the following:

- Create a spec for a class called `PhpSpecKata\Part4\CacheDecorator`.
- It must be a `DataSourceInterface`. Write a spec that checks this.
- It takes two other kinds of `DataSourceInterface` as its parameters.
- If the data is in the `InMemoryCache`, it can return the value from there.
- If the data isn't in the cache, it must return a value from `File`. It must write to the cache when it does this.
