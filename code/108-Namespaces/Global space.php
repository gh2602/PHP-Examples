<?php
/*
http://php.net/manual/en/language.namespaces.global.php
Global space
Without any namespace definition, all class and function definitions are placed into the global space
 - as it was in PHP before namespaces were supported.
Prefixing a name with \ will specify that the name is required from the global space even in the context of the namespace.

Note
even when you throw or catch Exception you must write \Exception
*/
namespace A\B\C;

/* This function is A\B\C\fopen */
function fopen() {
    /* ... */
    $f = \fopen(...); // call global fopen
    return $f;
}

