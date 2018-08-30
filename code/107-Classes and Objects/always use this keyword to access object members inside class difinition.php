<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php#106262
One has to explicitly use (notice the use of <?php $this->bar ?>):
 */

class Foo4
{
public $bar = 'Hi There';

    public function PrintInfo(){
        echo $bar;
    }
}
class Moo4
{
  public  $bar = "hi there";

    public function PrintInfo(){
        echo $this->bar;
    }
}
$f= new Foo4();
$f->PrintInfo();

$m= new Moo4();
$m->PrintInfo();

/* output
Notice: Undefined variable: bar in D:\wamp64\www\PHP-Examples\ex1.php on line 12
hi there
*/