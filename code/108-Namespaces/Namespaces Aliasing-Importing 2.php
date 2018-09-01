<?php
/*http://php.net/manual/en/language.namespaces.importing.php
Namespaces Aliasing-Importing 2
PHP additionally supports a convenience shortcut to place multiple use statements on the same line

*/
namespace fooNS2;
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // instantiates object of class My\Full\Classname
NSname\subns\func(); // calls function My\Full\NSname\subns\func



