<?php
/*
good alternative way of "define constant in parent and child classes-bad way.php"
*/
class GoodDbObject //may be abstract class
{
    protected $table_name='undefined';

    public function GetAll()
    {
        return "SELECT * FROM `".$this->table_name."`";
    }
}

class GoodDbPerson extends GoodDbObject
{
    protected $table_name='persons';
}

class GoodDbAdmin extends goodDbPerson
{
    protected $table_name='admins';
}

//main program
echo (new GoodDbObject())->GetAll()."\n";//output: "SELECT * FROM `undefined`"
echo (new GoodDbPerson())->GetAll()."\n";//output: "SELECT * FROM `persons`"
echo (new GoodDbAdmin())->GetAll()."\n";//output: "SELECT * FROM `admins`"

