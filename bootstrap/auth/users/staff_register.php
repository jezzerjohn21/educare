<?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row mt-sm-4">
        
              
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    
         	<?php

if(isset($_POST['signin']))
{
    $id_number=$_POST['id_number'];
$password=$_POST['password'];
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$status="Active";
$type="1";
$date=date("Y-m-d H:i");


	$query21a1=mysqli_query($con,"select * from  user where username='$username' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){

		  mysqli_query($con,"INSERT INTO user(id_number,firstname,middlename,lastname,status,email,contact,date_added,type,username,password) VALUES('$id_number','$firstname','$middlename','$lastname','$status','$email','$contact','$date','$type','$username','$password')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='staff_register.php';
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
        window.location.href='staff_register.php';
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

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                    
                    
                    
                    
                    
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Employee Admin Registration<br>
                      <hr>Please provide the following information.</h4>
                    </div>
                    <div class="card-body">
                        
                 <div class="form-group">
                        <label>ID Number *</label>
                        <input name="id_number" value="<?php echo $id_n;?>" type="text" class="form-control" readonly="">
                      </div>
             
             
                      <div class="form-group">
                        <label>Username *</label>
                        <input name="username" type="text" class="form-control" required="">
                      </div>
                         
                <div class="form-group">
                        <label>Password *</label>
                        <input name="password" type="text" class="form-control" required="">
                      </div>
                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" type="text" class="form-control" required="">
                      </div>
               
                                  <div class="form-group">
                        <label>Middlename *</label>
                        <input name="middlename" type="text" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" type="text" class="form-control" required="">
                      </div>
                      
                      
                      
                                         <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Contact no. *</label>
                        <input name="contact" type="text" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" type="text" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>Male</option>
                              <option>Female</option>
                            </select>
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Register</button>
                    </div>
                  </form>
                </div>
               
              </div>
            
              
              
              
              
              
             
            </div>
            
            
            
            
            
            
            
          </div>
        </section>
       
      </div>
     <?php
     
     include('footer.php');
     
     ?>