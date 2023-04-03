<?php

$con = mysqli_connect("localhost","loyaleadsta","loyaleadsta","loyaleadsta");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  date_default_timezone_set('Asia/Manila');
?><?php


$connect = new PDO("mysql:host=localhost; dbname=loyaleadsta", "loyaleadsta", "loyaleadsta");

?>
