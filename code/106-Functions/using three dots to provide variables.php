<?php
//URL : http://php.net/manual/en/functions.arguments.php
//using ... to provide variables
//You can also use ... when calling functions to unpack an array or Traversable variable or literal into the argument list
function add($a, $b) {
    return $a + $b;
}

echo add(...[1, 2])."\n";

$a = [1, 2];
echo add(...$a);


