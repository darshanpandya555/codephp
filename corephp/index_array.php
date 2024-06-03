<?php

/*
What is array?

there are three types of array.

    1) index array :- Array with  a numeric index.
    2) assocative array :- Array with named keys with print.
    3) multidimentional array :- one oe more array print a same time.

*/

// 1) index arrya 
$name = array('Darshan','urvi','pooja');
var_dump($name);

echo"<br>";

//2) assocative array 
$bike = array("brand"=>"yamaha", "model"=>"Rx 100", "year"=>"1986",);
var_dump($bike); 

echo "<br>";
//3) multidimentional array

$bike = array (
    array("bmw",20,12),
    array("ninja",30,14),
    array("hero",40,35),
    array("hayabusa",9,5) 
);

echo $bike[0][0].": In stock: ".$bike[0][1].", sold: ".$bike[0][2].".<br>";
echo $bike[1][0].": In stock: ".$bike[1][1].", sold: ".$bike[1][2].".<br>";
echo $bike[2][0].": In stock: ".$bike[2][1].", sold: ".$bike[2][2].".<br>";
echo $bike[3][0]."; In Stock: ".$bike[3][1].", sold: ".$bike[3][1].".<br>";


?>