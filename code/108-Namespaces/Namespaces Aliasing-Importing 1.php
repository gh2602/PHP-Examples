<?php
/*http://php.net/manual/en/language.namespaces.importing.php
Namespaces Aliasing-Importing 1
The ability to refer to an external fully qualified name with an alias, or importing, is an important feature of namespaces.
This is similar to the ability of unix-based filesystems to create symbolic links to a file or to a directory.

All versions of PHP that support namespaces support three kinds of aliasing or importing:
aliasing a class name, aliasing an interface name, and aliasing a namespace name.
PHP 5.6+ also allows aliasing or importing function and constant names.

In PHP, aliasing is accomplished with the use operator. Here is an example showing all 5 kinds of importing:

Note that for namespaced names the leading backslash is unnecessary and not recommended,
as import names must be fully qualified, and are not processed relative to the current namespace.
*/
namespace fooNS1;
use My\Full\Classname as Another;

// this is the same as use My\Full\NSname as NSname
use My\Full\NSname;

// importing a global class
use ArrayObject;

// importing a function (PHP 5.6+)
use function My\Full\functionName;

// aliasing a function (PHP 5.6+)
use function My\Full\functionName as func;

// importing a constant (PHP 5.6+)
use const My\Full\CONSTANT;

$obj = new namespace\Another; // instantiates object of class foo\Another
$obj = new Another; // instantiates object of class My\Full\Classname
NSname\subns\func(); // calls function My\Full\NSname\subns\func
$a = new ArrayObject(array(1)); // instantiates object of class ArrayObject
// without the "use ArrayObject" we would instantiate an object of class foo\ArrayObject
func(); // calls function My\Full\functionName
echo CONSTANT; // echoes the value of My\Full\CONSTANT


