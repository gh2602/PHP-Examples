<?php
//http://php.net/manual/en/language.namespaces.basics.php
namespace Foo\Bar\subnamespace;

const FOO = "Foo_Bar_subnamespace Constant\n";
function foo() {echo 'Foo\Bar\subnamespace\foo() function'."\n";}
class foo
{
    static function staticmethod() {echo '\Foo\Bar\subnamespace\foo::staticmethod() function'."\n";}
}
$myVar = "\Foo\Bar\subnamespace\myVar variable\n";