<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php
::class
Since PHP 5.5, the class keyword is also used for class name resolution.
You can get a string containing the fully qualified name of the ClassName class by using ClassName::class.
This is particularly useful with namespaced classes.
note that you must provide full path to access class(namespace\classname)
 */

namespace NS {
    class FirstClass
    {
    }

    echo FirstClass::class;
}

/* output
NS\FirstClass
*/
