<?php
/*
URL: http://php.net/manual/en/language.oop5.constants.php#104260
it's possible to declare constant in base class,
and override it in child, and access to correct value of the const from the static method is possible by:
 'get_called_class' method.

I(gh) think it is very bad idea use protected variables and object(not static) method.
as defined in "define constant in parent and child classes-good alternative way.php"
*/
abstract class dbObject
{
    protected const TABLE_NAME='undefined';

    public static function GetAll()
    {
        $calledClass = get_called_class();
        return "SELECT * FROM `".$calledClass::TABLE_NAME."`";
    }
}

class dbPerson extends dbObject
{
    protected const  TABLE_NAME='persons';
}

class dbAdmin extends dbPerson
{
    protected const  TABLE_NAME='admins';
}
echo  dbObject::GetAll()."\n";//output: "SELECT * FROM `undefined`"
echo dbPerson::GetAll()."\n";//output: "SELECT * FROM `persons`"
echo dbAdmin::GetAll()."\n";//output: "SELECT * FROM `admins`"

