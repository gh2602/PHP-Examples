<?php
/*
a way to use and multiple constructors - good in many cases.
alternative of http://php.net/manual/en/language.oop5.decon.php#99903
*/
class AA
{
    function __construct($a1=null,$a2=null,$a3=null)
    {
        echo('__construct called: '.$a1.','.$a2.','.$a3.PHP_EOL);
    }
}
$o = new AA('sheep');
$o = new AA('sheep','cat');
$o = new AA('sheep','cat','dog');
