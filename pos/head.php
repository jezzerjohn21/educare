   <?php
     include('../dist/dbcon.php');



error_reporting(0);

session_start();

if($_SESSION['id']>=1){

}else{
///	header('Location:login.php');
}
date_default_timezone_set("Asia/Manila"); 

if($_GET['login']==""){
    
    
    
}else{
    
        $_SESSION['id']=$_GET['login'];
}



$sid=$_SESSION['id'];
$queryusers=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);



         ?>
