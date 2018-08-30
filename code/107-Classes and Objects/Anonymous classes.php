<?php
/*
URL: http://php.net/manual/en/language.oop5.anonymous.php
Anonymous classes
Support for anonymous classes was added in PHP 7.
Anonymous classes are useful when simple, one-off objects need to be created.
*/

class Util
{
    function setLogger($obj)
    {
        var_dump($obj);
    }
}
// Pre PHP 7 code
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}
$util =new Util();
$util->setLogger(new Logger());

// PHP 7+ code
$util->setLogger(new class
{
    public function log($msg)
    {
        echo $msg;
    }

});
/* output
object(Logger)#2 (0) {
}
object(class@anonymous)#2 (0) {
}
 */