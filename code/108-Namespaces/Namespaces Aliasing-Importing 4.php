<?php
/*http://php.net/manual/en/language.namespaces.importing.php
Namespaces Aliasing-Importing 4
In addition, importing only affects unqualified and qualified names. Fully qualified names are absolute,
and unaffected by imports.
*/
namespace fooNS4;
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // instantiates object of class My\Full\Classname
$obj = new \Another; // instantiates object of class Another
$obj = new Another\thing; // instantiates object of class My\Full\Classname\thing
$obj = new \Another\thing; // instantiates object of class Another\thing




