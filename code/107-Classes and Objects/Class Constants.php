<?php
/*
URL: http://php.net/manual/en/language.oop5.constants.php
Class Constants:
It is possible to define constant values on a per-class basis remaining the same and unchangeable.
Constants differ from normal variables in that you don't use the $ symbol to declare or use them.
The default visibility of class constants is public.

The value must be a constant expression, not (for example) a variable, a property, or a function call.

It's also possible for interfaces to have constants. Look at the interface documentation for examples.

As of PHP 5.3.0, it's possible to reference the class using a variable.
The variable's value can not be a keyword (e.g. self, parent and static).

Note that class constants are allocated once per class, and not for each class instance.
*/


class NewMyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo NewMyClass::CONSTANT . "\n";

$classname = "NewMyClass";
echo $classname::CONSTANT . "\n"; // As of PHP 5.3.0

$class = new NewMyClass();
$class->showConstant();

echo $class::CONSTANT."\n"; // As of PHP 5.3.0
/* output
constant value
constant value
constant value
constant value
 */

//Example #4 Constant expression example
const ONE = 1;
class NewMoo {
    // As of PHP 5.6.0
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}
//Example #5 Class constant visibility modifiers
class NewFoo {
    // As of PHP 7.1.0
    public const BAR = 'bar';
    private const BAZ = 'baz';
}
echo NewFoo::BAR, PHP_EOL;
echo NewFoo::BAZ, PHP_EOL;//error
/* output
bar

Fatal error: Uncaught Error: Cannot access private const Foo::BAZ in …

 */

