<?php
/*
http://php.net/manual/en/language.namespaces.nsconstants.php
__NAMESPACE__ constant
(PHP 5 >= 5.3.0, PHP 7)

PHP supports two ways of abstractly accessing elements within the current namespace,
the __NAMESPACE__ magic constant, and the namespace keyword.

The value of __NAMESPACE__ is a string that contains the current namespace name.
In global, un-namespaced code, it contains an empty string.
*/
namespace MyProject {

    echo '"', __NAMESPACE__, '"'; // outputs "MyProject"
    echo \PHP_EOL;

}
namespace { //global namespace because we didn't provide name

    echo '"', __NAMESPACE__, '"'; // outputs ""
}
