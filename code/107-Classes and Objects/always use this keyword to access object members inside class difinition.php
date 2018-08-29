<?php
/*
URL: http://php.net/manual/en/language.oop5.basic.php#106262
One has to explicitly use (notice the use of <?php $this->bar ?>):
 */

class Foo
{
public $bar = 'Hi There';

    public function PrintInfo(){
        echo $bar;
    }
}
class Moo
{
  public  $bar = "hi there";

    public function PrintInfo(){
        echo $this->bar;
    }
}
$f= new Foo();
$f->PrintInfo();

$m= new Moo();
$m->PrintInfo();

/* output
Notice: Undefined variable: bar in D:\wamp64\www\PHP-Examples\ex1.php on line 12
hi there
*/