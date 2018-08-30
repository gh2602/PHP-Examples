<?php
/*
URL: http://php.net/manual/en/language.oop5.anonymous.php
Anonymous class - access protected and private members of outside class
Nesting an anonymous class within another class does not give it access to any private or protected methods
or properties of that outer class. In order to use the outer class' protected properties or methods,
the anonymous class can extend the outer class.
To use the private properties of the outer class in the anonymous class, they must be passed through its constructor

*/

class Outer
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Outer {
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

echo (new Outer)->func2()->func3(); //output: 6
