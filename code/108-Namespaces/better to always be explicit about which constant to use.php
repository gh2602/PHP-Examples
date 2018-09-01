<?php
namespace NS;
/*
http://php.net/manual/en/language.namespaces.definition.php#112937
it is better to always be explicit about which constant to use.
 */
define(__NAMESPACE__ .'\FOO','111');// this in \NS namespace
define('FOO','222');// this in global namespace, be careful
const BOO=20;// this in \NS namespace

echo FOO."\n";  // 111
echo \FOO."\n";  // 222
echo \NS\FOO."\n"; // 111
//echo NS\FOO."\n";// Fatal error: Uncaught Error: Undefined constant 'NS\NS\FOO'

echo BOO."\n";  // 20
//echo \BOO."\n";  // error because no BOO constant in global namespace.
echo \NS\BOO."\n"; // 20
//echo NS\BOO."\n";// Fatal error: Uncaught Error: Undefined constant 'NS\NS\BOO'