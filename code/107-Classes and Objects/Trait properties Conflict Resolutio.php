<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php
If a trait defines a property then a class can not define a property with the same name
unless it is compatible (same visibility and initial value),
otherwise a fatal error is issued. Before PHP 7.0.0,
defining a property in the class with the same visibility and initial value as in the trait,raised an E_STRICT notice.

*/


trait PropertiesTrait {
    public $same = true;
    public $different = false;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = true; // Allowed as of PHP 7.0.0; E_STRICT notice formerly
    public $different = true; // Fatal error
}


