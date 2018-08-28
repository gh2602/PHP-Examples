<?php
//URL : http://php.net/manual/en/control-structures.switch.php#9610
// you can use same trick to examine multi different conditions
$x = 2;
$y=1;
switch (true) {

    case ($x == 1):
        echo "x";
        break;

    case ($y == 1):
        echo "y";
        break;

    default:
        echo "none";
}