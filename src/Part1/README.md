# Part 1

The `Calculator` class doesn't have a test. It exhibits two core behaviours which unit tests are needed for.

There is an empty Spec class, waiting for tests. Try running it with `./vendor/bin/phpspec run`, then add tests which
pass.

The method signature for your first test should look like: `function it_does_a_simple_division()`

When you get to the second test case, dry using the notation `$this->shouldThrow('...')->during('...')`.
