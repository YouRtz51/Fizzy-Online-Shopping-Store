<?php 

$server="localhost";
$user="root";
$pwd="";
$database="Fizzy";

$conn=mysqli_connect("$server","$user","$pwd","$database");
if(!$conn){
  echo"Error Fetching A database connection";
  echo"<br>";
  echo'Error is'.mysqli_connect_error();
  die();
};

?>