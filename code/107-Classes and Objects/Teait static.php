<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php
Trait Static Methods
*/

trait StaticExample {
    public static function doSomething() {
        echo "Doing something\n";
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();

trait Counter {
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

$o = new C1(); $o->inc(); // echo 1
$p = new C2(); $p->inc(); // echo 1

