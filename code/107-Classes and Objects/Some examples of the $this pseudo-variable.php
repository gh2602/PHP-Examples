<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php
Example #2 Some examples of the $this pseudo-variable

The pseudo-variable $this is available when a method is called from within an object context.
$this is a reference to the calling object (usually the object to which the method belongs,
but possibly another object, if the method is called statically from the context of a secondary object).
As of PHP 7.0.0 calling a non-static method statically from an incompatible context results in $this being undefined
inside the method. Calling a non-static method statically from an incompatible context has been deprecated
as of PHP 5.6.0. As of PHP 7.0.0 calling a non-static method statically has been generally deprecated
(even if called from a compatible context). Before PHP 5.6.0 such calls already triggered a strict notice.


We're assuming that error_reporting is disabled for this example;
otherwise the following code would trigger deprecated and strict notices, respectively, depending on the PHP version.
 */

class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();

/*
Output of the above example in PHP 5:

$this is defined (A)
$this is not defined.
$this is defined (B)
$this is not defined.

Output of the above example in PHP 7:

$this is defined (A)
$this is not defined.
$this is not defined.
$this is not defined.
 */