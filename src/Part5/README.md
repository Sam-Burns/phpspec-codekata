# Part 5

We need a class which can print random numbers.

- Use PhpSpec to create a class called `PhpSpecKata\Part5\RandomNumberGenerator`.
- It must have a method called `getRandomNumber()`, which should return a random int between 1 and 10
- The test for `getRandomNumber()` should check that the return value is an int, but it shouldn't care which value
- Hint: there are other things like `shouldBe()` in Prophecy - can they help?

The numbers must also be printable

- The class also needs to take `Printer` as a parameter.
- The test must express that, after `printRandomNumber()` has been called on the `RandomNumberGenerator`,
`printSomething()` should have been called on the `Printer`.
- Hint: the assertion in this test can use `shouldHaveBeenCalled()`. This means it isn't strictly a mock object - it is
another kind of test double called a spy
- Hint: you don't have to do, for example, `printSomething(10)`. `printSomething(Argument::type(ClassName::class))` is
also valid in Prophecy