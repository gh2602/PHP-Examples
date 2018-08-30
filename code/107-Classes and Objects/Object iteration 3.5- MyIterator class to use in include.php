<?php
/*
http://php.net/manual/en/language.oop5.iterations.php
Object iteration 3.5- MyIterator class to use in include
if file "Object iteration 4- implementing IteratorAggregate interface.php" file
To take it a step further, the Iterator interface may be implemented. This allows the object to dictate how it will be iterated and what values will be available on each iteration.

Note:
if you iterate like this foreach($it as $key => $value) then key() function will called
whereas if you iterate like this foreach($it as $value) then key() function will never called
*/

class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "rewinding\n";
        reset($this->var);
    }

    public function current()
    {
        $var = current($this->var);
        echo "current: $var\n";
        return $var;
    }

    public function key()
    {
        $var = key($this->var);
        echo "key: $var\n";
        return $var;
    }

    public function next()
    {
        $var = next($this->var);
        echo "next: $var\n";
        return $var;
    }

    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        echo "valid: $var\n";
        return $var;
    }

}
echo "";
