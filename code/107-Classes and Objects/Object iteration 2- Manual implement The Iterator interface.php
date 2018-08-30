<?php
/*
http://php.net/manual/en/class.iterator.php
Object iteration 2- Manual implement The Iterator interface
Iterator extends Traversable {
// Methods
abstract public mixed current ( void )
abstract public scalar key ( void )
abstract public void next ( void )
abstract public void rewind ( void )
abstract public bool valid ( void )
}

Note:
if you iterate like this foreach($it as $key => $value) then key() function will called
whereas if you iterate like this foreach($it as $value) then key() function will never called

Note: Traversable interface
Interface to detect if a class is traversable using foreach.
Abstract base interface that cannot be implemented alone.
Instead it must be implemented by either IteratorAggregate or Iterator.

*/

class myIterate implements Iterator {
    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    public function __construct() {
        $this->position = 0;
    }

    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it = new myIterate;

foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
/*
string(18) "myIterator::rewind"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(0)
string(12) "firstelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(1)
string(13) "secondelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
string(19) "myIterator::current"
string(15) "myIterator::key"
int(2)
string(11) "lastelement"

string(16) "myIterator::next"
string(17) "myIterator::valid"
 */