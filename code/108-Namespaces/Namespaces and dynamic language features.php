<?php
/*
http://php.net/manual/en/language.namespaces.dynamic.php
Namespaces and dynamic language features
PHP's implementation of namespaces is influenced by its dynamic nature as a programming language.
One must use the fully qualified name (class name with namespace prefix).

Note that because there is no difference between a qualified and a fully qualified Name
inside a dynamic class name, function name, or constant name, the leading backslash is not necessary.

Be sure to read the note about escaping namespace names in strings: http://php.net/manual/en/language.namespaces.faq.php#language.namespaces.faq.quote


 */
namespace namespacename;
class classname
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function funcname()
{
    echo __FUNCTION__,"\n";
}
const constname = "namespaced";

/* note that if using double quotes, "\\namespacename\\classname" must be used */
$a = '\namespacename\classname';
$obj = new $a; // prints namespacename\classname::__construct
$a = 'namespacename\classname';
$obj = new $a; // also prints namespacename\classname::__construct
$b = 'namespacename\funcname';
$b(); // prints namespacename\funcname
$b = '\namespacename\funcname';
$b(); // also prints namespacename\funcname
echo constant('\namespacename\constname'), "\n"; // prints namespaced
echo constant('namespacename\constname'), "\n"; // also prints namespaced
