<?php
//http://php.net/manual/en/language.namespaces.basics.php
namespace Foo\Bar;
include 'Use Namespaces - File1.php';

const FOO = "Foo_Bar Constant\n";
function foo()  {echo 'Foo\Bar\foo() function'."\n";}
class foo
{
    static function staticmethod() {echo '\Foo\Bar\foo::staticmethod() function'."\n";}
}

/* Unqualified name */
foo(); // Foo\Bar\foo() function
foo::staticmethod(); // \Foo\Bar\foo::staticmethod() function
echo FOO; // Foo_Bar Constant

/* Qualified name */
subnamespace\foo(); // Foo\Bar\subnamespace\foo() function
subnamespace\foo::staticmethod(); // \Foo\Bar\subnamespace\foo::staticmethod() function
echo subnamespace\FOO; // Foo_Bar_subnamespace Constant

/* Fully qualified name */
\Foo\Bar\foo(); // Foo\Bar\foo() function
\Foo\Bar\foo::staticmethod(); // \Foo\Bar\foo::staticmethod() function
echo \Foo\Bar\FOO; // Foo_Bar Constant

\Foo\Bar\subnamespace\foo(); // Foo\Bar\subnamespace\foo() function
\Foo\Bar\subnamespace\foo::staticmethod(); // \Foo\Bar\subnamespace\foo::staticmethod() function
echo \Foo\Bar\subnamespace\FOO; // Foo_Bar_subnamespace Constant

/* access global namespace */
//Example #1 Accessing global classes, functions and constants from within a namespace
function strlen($str) {echo "local(\Foo\Bar) strlen function";}// we declare function already found in global namespace
const INI_ALL = 3;// we declare const already found in global namespace
class Exception {public function __construct(){echo "local Exception instantiated";}}// we class function already found in global namespace
/*Note:
Ee don't need specify global namespace (\) in the next lines
if we weren't already declare our INI_ALL, strlen in previous lines,
but we must use global namespace (\) for Exception class even if we weren't declare our Exception class
*/
echo \strlen('hi')."\n"; // calls global function strlen output: 2
echo \INI_ALL."\n"; // accesses global constant INI_ALL output: 7
$c = new \Exception('error'); // instantiates global class Exception
/* use variables */

/*
Although any valid PHP code can be contained within a namespace,
only the following types of code are affected by namespaces:
classes (including abstracts and traits), interfaces, functions and constants.

variables always global
 */
$myVar = "\Foo\Bar\myVar variable\n";
echo $myVar;// \Foo\Bar\myVar variable, but if we comment previous line output will be: \Foo\Bar\subnamespace\myVar variable
//echo \Foo\Bar\$myVar; //Parse error: syntax error, unexpected '$myVar' (T_VARIABLE), expecting identifier (T_STRING) in ...
//echo \Foo\Bar\subnamespace\$myVar;// Parse error: syntax error, unexpected '$myVar' (T_VARIABLE), expecting identifier (T_STRING) in ...