<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php
*/
class FirstClass
{

}

$instance = new FirstClass();

// This can also be done with a variable:
$className = 'FirstClass';
$instance = new $className(); // new FirstClass()

