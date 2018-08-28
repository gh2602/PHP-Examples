<?php
//URL: http://php.net/manual/en/language.operators.comparison.php
/*
If you compare a number with a string or the comparison involves numerical strings,
then each string is converted to a number and the comparison performed numerically.
These rules also apply to the switch statement.
The type conversion does not take place when the comparison is === or !== as this involves comparing the type as well as the value.
 */
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
    case 0:
        echo "0";
        break;
    case "a": // never reached because "a" is already matched with 0
        echo "a";
        break;
}
