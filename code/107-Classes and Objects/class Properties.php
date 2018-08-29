<?php
/*
URL: http://php.net/manual/en/language.oop5.properties.php
Properties:
Properties are defined by using one of the keywords public, protected, or private, followed by a normal variable declaration.
This declaration may include an initialization, but this initialization must be a constant value
Note:
In order to maintain backward compatibility with PHP 4, PHP 5 will still accept the use of the keyword: var
in property declarations instead of (or in addition to) public, protected, or private.
If you declare a property using var instead of one of public, protected, or private,
then PHP 5 will treat the property as if it had been declared as public.

Within class methods non-static properties may be accessed by using -> (Object Operator): $this->property
(where property is the name of the property).
Static properties are accessed by using the :: (Double Colon): self::$property

*/

class PropClass
{
    // valid as of PHP 5.6.0:
    public $var1 = 'hello ' . 'world';
    // valid as of PHP 5.3.0:
    public $var2 = <<<EOD
hello world
EOD;
// note for previous function that the end tag heredoc EOD must be in the beginning of line(no white spaces)
// and the end tag is the only word in the line (with semicolon after it directly)

    // valid as of PHP 5.6.0:
    public $var3 = 1+2;
    // invalid property declarations:
//    public $var4 = self::myStaticMethod();
//    public $var5 = $myVar;

    // valid property declarations:
    public $var6 = MYCONSTANT; // we consider that MYCONSTANT already defined
    public $var7 = array(true, false);

    // valid as of PHP 5.3.0:
    public $var8 = <<<'EOD'
hello world
EOD;
// note for previous function that the end tag nowdoc EOD must be in the beginning of line(no white spaces)
// and the end tag is the only word in the line (with semicolon after it directly)
}


