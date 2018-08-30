<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php#107965
Unlike inheritance; if a trait has static properties,
each class using that trait has independent instances of those properties.

*/

//Example using parent class:
class TestClass {
    public static $_bar;
}
class Foo1 extends TestClass { }
class Foo2 extends TestClass { }
Foo1::$_bar = 'Hello';
Foo2::$_bar = 'World';
echo Foo1::$_bar . ' ' . Foo2::$_bar."\n"; // Prints: World World

//Example using trait:
trait TestTrait {
    public static $_bar;
}
class tFoo1 {
    use TestTrait;
}
class tFoo2 {
    use TestTrait;
}
tFoo1::$_bar = 'Hello';
tFoo2::$_bar = 'World';
echo tFoo1::$_bar . ' ' . tFoo2::$_bar."\n"; // Prints: Hello World



