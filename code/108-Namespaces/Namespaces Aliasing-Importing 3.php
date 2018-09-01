<?php
/*http://php.net/manual/en/language.namespaces.importing.php
Namespaces Aliasing-Importing 3
Importing is performed at compile-time, and so does not affect dynamic class, function or constant names.

*/
namespace fooNS3;
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // instantiates object of class My\Full\Classname
$a = 'Another';
$obj = new $a;      // instantiates object of class Another



