
<?php
declare(encoding='utf-8');
/*
Encoding
A script's encoding can be specified per-script using the encoding directive.

Example #3 Declaring an encoding for the script.

<?php
declare(encoding='ISO-8859-1');
// code here
?>
Caution
When combined with namespaces, the only legal syntax for declare is declare(encoding='...'); where ... is the encoding value.
declare(encoding='...') {} will result in a parse error when combined with namespaces.

The encoding declare value is ignored in PHP 5.3 unless php is compiled with --enable-zend-multibyte.

Note that PHP does not expose whether --enable-zend-multibyte was used to compile PHP other than by phpinfo().

See also zend.script_encoding.
*/
$x = 'عربي';
echo $x;
/*
output
Warning: declare(encoding=...) ignored because Zend multibyte feature is turned off by settings in D:\wamp64\www\PHP-Examples\ex1.php on line 3

Fatal error: Encoding declaration pragma must be the very first statement in the script in D:\wamp64\www\PHP-Examples\ex1.php on line 3

Process finished with exit code 255
 */