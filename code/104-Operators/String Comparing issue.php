<?php
/*
 arnaud at arnapou dot net ¶8 years ago
[Editor's note: consider using ===]

I discover after 10 years of PHP development something awfull :
even if you make a string comparison (both are strings),
strings are tested like integers and leading "space" character (even \n, \r, \t) is ignored ....

I spent hours because of leading \n in a string ...
it hurts my developper sensibility to see two strings beeing compared like integers and not like strings ...
I use strcmp now for string comparison ... so stupid ...

Test code :
 */
test("1234","1234");
test("1234", " 1234");
test("1234", "\n1234");
test("1234", "1234 ");
test("1234", "1234\n");

function test($v1, $v2) {
    echo "<h1>[".show_cr($v1)."] vs [".show_cr($v2)."]</h1>";
    echo my_var_dump($v1)."<br />";
    echo my_var_dump($v2)."<br />";
    if($v1 == $v2) {
        echo "EQUAL !";
    }
    else {
        echo "DIFFERENT !";
    }
//    if(strcmp($v1,$v2)==0) {
//        echo "EQUAL !";
//    }
//    else {
//        echo "DIFFERENT !";
//    }
}
function show_cr($var) {
    return str_replace("\n", "\\n", $var);
}

function my_var_dump($var) {
    ob_start();
    var_dump($var);
    $dump = show_cr(trim(ob_get_contents()));
    ob_end_clean();
    return $dump;
}