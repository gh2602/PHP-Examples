<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php
Conflict Resolution:
If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly resolved.

To resolve naming conflicts between Traits used in the same class, the insteadof operator needs to be used to choose exactly one of the conflicting methods.

Since this only allows one to exclude methods, the as operator can be used to add an alias to one of the methods. Note the as operator does not rename the method and it does not affect any other method either.



*/

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        A::smallTalk as atalk;
    }
}
$t=new Talker();
$t->bigTalk();
$t->smallTalk();
$t->atalk();