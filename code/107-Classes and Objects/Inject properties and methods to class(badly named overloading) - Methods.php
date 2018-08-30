<?php
/*
http://php.net/manual/en/language.oop5.overloading.php
Inject properties and methods to class(badly named overloading) - Methods

public mixed __call ( string $name , array $arguments )
public static mixed __callStatic ( string $name , array $arguments )
__call() is triggered when invoking inaccessible methods in an object context.

__callStatic() is triggered when invoking inaccessible methods in a static context.

The $name argument is the name of the method being called.
The $arguments argument is an enumerated array containing the parameters passed to the $name'ed method.

*/

class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context','other param to clarify implode');  // As of PHP 5.3.0

/* output
Calling object method 'runTest' in object context
Calling static method 'runTest' in static context, other param to clarify implode

 */
