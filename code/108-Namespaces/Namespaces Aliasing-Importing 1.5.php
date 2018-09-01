<?php
/*
http://php.net/manual/en/language.namespaces.importing.php#119091
Namespaces Aliasing-Importing 1.5
Note the code `use ns1\c1` may refer to importing class `c1` from namespace `ns1`
as well as importing whole namespace `ns1\c1` or even import both of them in one line. Example:

*/
namespace fooNS15;
class c1{}

namespace fooNS15\c1;

class c11{}

namespace main;

use fooNS15\c1;

$c1 = new c1();
$c11 = new c1\c11();

var_dump($c1); // object(fooNS15\c1)#1 (0) { }
var_dump($c11); // object(fooNS15\c1\c11)#2 (0) { }

