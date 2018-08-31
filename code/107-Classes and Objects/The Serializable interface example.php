<?php
/*
http://php.net/manual/en/class.serializable.php#118264
Here's an example how to un-, serialize more than one property.
using interface Serializable: (Interface for customized serializing)
Classes that implement this interface no longer support __sleep() and __wakeup().
The method serialize is called whenever an instance needs to be serialized.
This does not invoke __destruct() or have any other side effect unless programmed inside the method.
When the data is unserialized the class is known and the appropriate unserialize() method is called as a constructor
instead of calling __construct(). If you need to execute the standard constructor you may do so in the method.

 */
class SerializableObj implements \Serializable
{
    public $property1;
    protected $property2;
    protected $property3;

    public function __construct(string $property1, int $property2, array $property3)
    {
        $this->property1 = $property1;
        $this->property2 = $property2;
        $this->property3 = $property3;
    }

    public function serialize()
    {
        return serialize([
            $this->property1,
            $this->property2,
            $this->property3,
        ]);
    }

    public function unserialize($data)
    {
        list(
            $this->property1,
            $this->property2,
            $this->property3
            ) = unserialize($data);
    }

}

$f = new SerializableObj("pro1", 10, array("A" => 5, "B" => 7));
$str = serialize($f);
echo $str . "\n";
$f->property1 = "changed pro 1";
$ff = unserialize($str);
var_dump($ff);

/* output
C:15:"SerializableObj":64:{a:3:{i:0;s:4:"pro1";i:1;i:10;i:2;a:2:{s:1:"A";i:5;s:1:"B";i:7;}}}
object(SerializableObj)#2 (3) {
  ["property1"]=>
  string(4) "pro1"
  ["property2":protected]=>
  int(10)
  ["property3":protected]=>
  array(2) {
    ["A"]=>
    int(5)
    ["B"]=>
    int(7)
  }
}

 */