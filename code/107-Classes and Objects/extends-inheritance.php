<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php
A class can inherit the methods and properties of another class by using the keyword extends in the class declaration.
It is not possible to extend multiple classes; a class can only inherit from one base class.

The inherited methods and properties can be overridden by redeclaring them with the same name defined in the parent class.
However, if the parent class has defined a method as final, that method may not be overridden.
It is possible to access the overridden methods or static properties by referencing them with parent::.

When overriding methods, the parameter signature should remain the same or PHP will generate an E_STRICT level error.
This does not apply to the constructor, which allows overriding with different parameters.
 */

class SimpleClass2
{
    function displayVar()
    {
        echo "a default value \n";
    }
}
class ExtendClass extends SimpleClass2
{
    // Redefine the parent method
    function displayVar() // override parent method with same method signature
    {
        echo "Extending class\n";
        parent::displayVar(); // parent method will not of course called automatically
    }
}

$extended = new ExtendClass();
$extended->displayVar();


