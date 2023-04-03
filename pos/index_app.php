<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>LoyaLeadsta</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body style="background-color:#007236;">
 <!-- <div class="loader"></div>-->
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                <br><br>
           
                    <center>
                    <img src="login.fw.png">
      </center>
            
 
              <div class="card-body">
                  
                  
                  
                  <?php
include('dist/dbcon.php');
error_reporting(0);

session_start();

if($_SESSION['id']>=1):
header('Location:users/dashboard.php');
endif;
date_default_timezone_set("Asia/Manila"); 

?>
	<?php

if(isset($_POST['signin']))
{
$username=$_POST['username'];
$pass=$_POST['password'];




$query=mysqli_query($con,"SELECT * FROM user WHERE username='$username' and password='$pass' and status='Active'  and type>=3")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
	
	$date=date("Y-m-d");

	$queryu=mysqli_query($con,"SELECT * FROM user WHERE username='$username' and password='$pass' and status='Active' ")or die(mysqli_error($con));
        $counteru=mysqli_num_rows($queryu);
	
	
	
  $id=$row['id'];
$user_type=$row['type'];
			        
           $counter=mysqli_num_rows($query);

  	if ($counteru == 0) 
	  {	
	     
	     
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='index_app.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert2();
function JSalert2(){

swal("Ops!", "Invalid Credentials!", "warning");
 
}
</script>





<?php
	     
	      
	  }else{

  	if ($counter == 0) 
	  {	
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='index_app.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Invalid Credentials!", "warning");
 
}
</script>


<?php
	  } 
	  elseif ($counter > 0)
	  {
		 $ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
	$date = date("Y-m-d H:i:s");
	 	mysqli_query($con,"INSERT INTO history_log(ip_add,user_id,remarks,date_added) VALUES('$ip','$id','Login','$date')")or die(mysqli_error($con));
		  
	 $_SESSION['id']=$id;	
	 $_SESSION['type']=$user_type;	
	 
	 $_SESSION['firstname']=$row['firstname'];	
	 	 $_SESSION['lastname']=$row['lastname'];	
		  $_SESSION['middlename']=$row['middlename'];
		  
		  
		  
		  
		  header('Location:users/dashboard.php');
		  

	
		 

	  }
	  }
	      
	      
	      


		





}
?>
        
           
                  
                  
                  
                <form method="POST"  class="needs-validation" >
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="signin" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
         
      
              </div>
              
        
            </div>
                   <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.php">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>