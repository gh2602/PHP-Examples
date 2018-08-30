<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php
Trait Static Methods
*/




trait StaticExample {
    public static function doSomething() {
        echo 'Doing something';
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();
