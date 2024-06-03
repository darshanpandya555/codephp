<?php

$guj=$_POST['guj'];
$Eng=$_POST['Eng'];
$mt=$_POST['maths'];
$hin=$_POST['hin'];
$en=$_POST['com'];
$per=0;
if(isset($_POST['sub']))
 {
  echo "<h1>";
    $per=($guj+$Eng+$mt+$hin+$en)/5;
  echo"Percentage obtained by student is $per </br>";
  echo "</h1>";
  if($per>=90)
  {
   $per=1;
  }
  else if($per>=80)
  {
   $per=2;
  }
  else if($per>=70)
  {
   $per=3;
  }
  else if($per>=60)
  {
   $per=4;
  }
  else if($per>=40)
  {
   $per=5;
  }
  else
  {
   $per=6;
  }
  
  switch($per)
  {
   case 1:
   echo "Grade : A";
   break;

   case 2:
   echo "Grade : B";
   break;

   case 3:
   echo "Grade : C";
   break;
   
   case 4:
   echo "Grade : D";
   break;
   
   case 5:
   echo "Grade : E";
   break;
   
   default:
   echo "Fail!!";
   }
  
 }



header("refresh:4,grade.php");


?>