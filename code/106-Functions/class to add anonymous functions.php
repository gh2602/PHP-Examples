<?php

/*
(string) $name Name of the function that you will add to class.
Usage: $Foo->add(function(){},$name);
This will add a public function in Foo Class.
*/

class Foo
{
    public function add($func, $name)
    {
        $this->{$name} = $func;
    }

    public function __call($func, $arguments)
    {
        call_user_func_array($this->{$func}, $arguments);
    }
}

$Foo = new Foo();
$Foo->add(function () {
    echo "Hello World";
}, "helloWorldFunction");
$Foo->add(function ($parameterone) {
    echo $parameterone;
}, "exampleFunction");
$Foo->helloWorldFunction(); /*Output : Hello World*/
$Foo->exampleFunction("Hello PHP"); /*Output : Hello PHP*/

