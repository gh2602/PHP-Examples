<?php
/*
URL: http://php.net/manual/en/language.oop5.decon.php#99903
a way to use and understand multiple constructors:

*/
class A
{
    function __construct() // same as __construct(...$args)
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct1($a1)
    {
        echo('__construct with 1 param called: '.$a1.PHP_EOL);
    }

    function __construct2($a1,$a2)
    {
        echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL);
    }

    function __construct3($a1,$a2,$a3)
    {
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL);
    }
}
$o = new A('sheep');
$o = new A('sheep','cat');
$o = new A('sheep','cat','dog');
