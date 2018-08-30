<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php
hat means that calling an anonymous function which has been assigned to a property is not directly possible.
Instead the property has to be assigned to a variable first, for instance.
As of PHP 7.0.0 it is possible to call such a property directly by enclosing it in parentheses.
 */
class Foo6
{
    public $bar;

    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo6();

// as of PHP 5.3.0:

//$func = $obj->bar;
//echo $func(), PHP_EOL;

// alternatively, as of PHP 7.0.0:
echo ($obj->bar)(), PHP_EOL;//uniform variable syntax

