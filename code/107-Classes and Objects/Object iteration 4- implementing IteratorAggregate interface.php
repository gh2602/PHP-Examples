<?php
/*
http://php.net/manual/en/language.oop5.iterations.php
The IteratorAggregate interface can be used as an alternative to implementing all of the Iterator methods.
IteratorAggregate only requires the implementation of a single method, IteratorAggregate::getIterator(),
which should return an instance of a class implementing Iterator.

*/

include "Object iteration 3.5- MyIterator class to use in include.php";
class MyCollection implements IteratorAggregate
{
    private $items = array();
    private $count = 0;

    // Required definition of interface IteratorAggregate
    public function getIterator() {
        return new MyIterator($this->items);
    }

    public function add($value) {
        $this->items[$this->count++] = $value;
    }
}

$coll = new MyCollection();
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

foreach ($coll as $key => $val) {
    echo "key/value: [$key -> $val]\n\n";
}
/*
 rewinding
valid: 1
current: value 1
key: 0
key/value: [0 -> value 1]

next: value 2
valid: 1
current: value 2
key: 1
key/value: [1 -> value 2]

next: value 3
valid: 1
current: value 3
key: 2
key/value: [2 -> value 3]

next:
valid:
 */