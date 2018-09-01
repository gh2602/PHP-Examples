<?php
/*
http://php.net/manual/en/language.namespaces.importing.php#121785
Namespaces Aliasing-Importing 5.5 - Group use all in ne
Group use declarations ¶
From PHP 7.0 onwards, classes, functions and constants being imported from the same namespace can be grouped together in a single use statement.
Here is a handy way of importing classes, functions and conts using a single use keyword:

*/
namespace fooNS55;
// PHP 7+ code
use Mizo\Web\ {
    Php\WebSite,
    Php\KeyWord,
    Php\UnicodePrint,
    JS\JavaScript,
    function JS\printTotal,
    function JS\printList,
    const JS\BUAIKUM,
    const JS\MAUTAM
};

