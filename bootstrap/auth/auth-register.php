<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>LoyaLeadsta</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body style="background-color:#007236;">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
           <br><br>
              
                <div class="card-header">
     
  
                <h2>Account information</h2>
                 <p>Please fill up the form bellow.</p>
              </div>
              <div class="card-body">
                  
                  
              	<?php
include('dist/dbcon.php');
if(isset($_POST['signin']))
{
    
$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;
    $id_number=$id_n;
$password=$_POST['password'];
$username=$_POST['email'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$status="Active";
$type="3";
$date=date("Y-m-d H:i");


	$query21a1=mysqli_query($con,"select * from  user where username='$username' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){

		  mysqli_query($con,"INSERT INTO user(gender,id_number,firstname,middlename,lastname,status,email,contact,date_added,type,username,password) VALUES('$gender','$id_number','$firstname','$middlename','$lastname','$status','$email','$contact','$date','$type','$username','$password')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='auth-register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Register!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='auth-register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Username Already Used!", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}



}


?>           
                    
   
                  
                <form method="POST">
                    <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="firstname" required>
                    </div>
                    
                          <div class="form-group col-12">
                      <label for="last_name">Middle Name</label>
                      <input id="last_name" type="text" class="form-control" name="middelanem" required>
                    </div>
                    
                    <div class="form-group col-12">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="lastname" required>
                    </div>
                        <div class="form-group col-12">
                      <label for="last_name">Email</label>
                      <input id="last_name" type="email" class="form-control" name="email" required>
                    </div>
                        <div class="form-group col-12">
                      <label for="last_name">Contact no.</label>
                      <input id="last_name" type="text" class="form-control" name="contact" required>
                    </div>
                    
                    
                             <div class="form-group col-12">
                      <label for="last_name">Gender</label>
                      <select id="last_name" type="text" class="form-control" name="gender" required>
                               <option value="">--Please Select--</option>
                          <option>Male</option>
                               <option>Female</option>
                          </select>
                    </div>
                    
                  </div>
       
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="signin" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="index_app.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>