<?php


     include('../dist/dbcon.php');

session_start();
$sid=$_SESSION['id'];


$queryusers=mysqli_query($con,"SELECT sum(price) as total FROM cart WHERE added_by='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);

$name = $_POST['user_name'];

$vat=$rowuser['total']*0.12;


echo "₱ ".number_format($vat,2);

?>