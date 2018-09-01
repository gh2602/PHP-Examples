<?php
/*
http://php.net/manual/en/language.namespaces.nsconstants.php
namespace keyword
(PHP 5 >= 5.3.0, PHP 7)
The namespace keyword can be used to explicitly request an element from the current namespace or a sub-namespace.
It is the namespace equivalent of the self operator for classes.
*/

namespace MyProject {

    blah\mine(); // calls function MyProject\blah\mine()
    namespace\blah\mine(); // calls function MyProject\blah\mine()

    namespace\func(); // calls function MyProject\func()
    namespace\sub\func(); // calls function MyProject\sub\func()
    namespace\cname::method(); // calls static method "method" of class MyProject\cname
    $a = new namespace\sub\cname(); // instantiates object of class MyProject\sub\cname
    $b = namespace\CONSTANT; // assigns value of constant MyProject\CONSTANT to $b
}

namespace { //global namespace
    namespace\func(); // calls function func()
    namespace\sub\func(); // calls function sub\func()
    namespace\cname::method(); // calls static method "method" of class cname
    $a = new namespace\sub\cname(); // instantiates object of class sub\cname
    $b = namespace\CONSTANT; // assigns value of constant CONSTANT to $b
}
