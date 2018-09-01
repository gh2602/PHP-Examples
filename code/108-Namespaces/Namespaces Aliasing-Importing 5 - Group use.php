<?php
/*http://php.net/manual/en/language.namespaces.importing.php
Namespaces Aliasing-Importing 5 - Group use
Group use declarations ¶
From PHP 7.0 onwards, classes, functions and constants being imported from the same namespace can be grouped together in a single use statement.

*/
namespace fooNS5;
// Pre PHP 7 code
use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// PHP 7+ code
use some\namespace\{ClassA, ClassB, ClassC as C};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};
