<?php
/*
URL: http://php.net/manual/en/language.oop5.traits.php
Abstract Trait Members
*/



trait Hello {
    public function sayHelloWorld() {
        echo 'Hello '.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}

$h=new MyHelloWorld();
$h->setWorld("world");
$h->sayHelloWorld();
