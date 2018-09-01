<?php
/*
http://php.net/manual/en/language.namespaces.definitionmultiple.php

It is strongly discouraged as a coding practice to combine multiple namespaces into the same file.
The primary use case is to combine multiple PHP scripts into the same file.

using of global namespaces and multiple namespaces in one PHP file
increase the complexity and decrease readability of the code.

To combine global non-namespaced code with namespaced code, only bracketed syntax is supported.
Global code should be encased in a namespace statement with no namespace name as in:

No PHP code may exist outside of the namespace brackets except for an opening declare statement.
 */
declare(encoding='utf-8'); //Warning: declare(encoding=...) ignored because Zend multibyte feature is turned off by settings in ...
namespace MyProject {

    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

namespace AnotherProject {

    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

namespace { // global code
    $a = MyProject\connect();
    echo $a;
}