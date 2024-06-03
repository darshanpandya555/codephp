<?php
$a=1;
$b=&$a;
$b="2$b";

echo "$b";

/*
answer :-- $a is variable have string as type and contain 1 as value, $b is reference of $a so if we change the value of $b that value of $a is changed automatically because both have the same value.

output :-

$b = '2$b'  = '21' = $a .
*/

?>