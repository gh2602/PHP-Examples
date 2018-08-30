<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php
Traits-Changing Method Visibility
*/


trait HelloWorld {
    protected function sayHello() {
        echo "Hello World!\n";
    }
}

// Change visibility of sayHello
class MyClass1 {
    use HelloWorld { sayHello as public; }
}

// Alias method with changed visibility
class MyClass2 {
    use HelloWorld { sayHello as public myPublicHello; }
}

$c1=new MyClass1();
$c1->sayHello();
$c2=new MyClass2();
$c2->myPublicHello();