<?php  
$no = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h1>Fibonacci series</h1>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($no < 8 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $no = $no + 1;  
}
?>  