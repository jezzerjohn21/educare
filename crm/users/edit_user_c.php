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
              
              
              
$sid=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM customer WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];
$status=$_POST['status'];
$firstname=strtoupper ($_POST['firstname']);
$lastname=strtoupper ($_POST['lastname']);
$middlename=strtoupper ($_POST['middlename']);
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];

$address=$_POST['address'];
$tin=$_POST['tin'];

$username=$_POST['username'];
$password=$_POST['password'];
	mysqli_query($con,"update customer set password='$password',status='$status',firstname='$firstname',lastname='$lastname',email='$email',contact='$contact'

 where id='$id'")or die(mysqli_error());
	$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
	$date = date("Y-m-d H:i:s");
	 	mysqli_query($con,"INSERT INTO history_log(ip_add,user_id,remarks,date_added) VALUES('$ip','$id','Update the member ','$date')")or die(mysqli_error($con));
	
		  
		  
		  
	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='edit_user_c.php?id=$id'</script>";  
	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Update User Information<br>
                      <hr>Please provide the following information.</h4>
                    </div>
                    <div class="card-body">
                        
                 <div class="form-group">
                        <label>User Code *</label>
                        <input name="id_number" value="<?php echo $row['user_code'];?>" type="text" class="form-control" readonly="">
                      </div>
             
   
                         
                <div class="form-group">
                        <label>Password *</label>
                        <input name="password" value="<?php echo $row['password'];?>" type="text" class="form-control" required="">
                      </div>
                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" value="<?php echo $row['firstname'];?>" type="text" class="form-control" required="">
                      </div>
               
                               
                      
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" value="<?php echo $row['lastname'];?>" type="text" class="form-control" required="">
                      </div>
                      
                      
                      
                                         <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" value="<?php echo $row['email'];?>" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Contact no. *</label>
                        <input name="contact" value="<?php echo $row['contact'];?>" type="text" class="form-control" required="">
                      </div>
                      
                                       
                      
                      
                            
                                       
                                                   <div class="form-group">
                        <label>Account Status</label>
                        <select name="status" type="text" class="form-control" required="">
                            <option><?php echo $row['status'];?></option>
                            <option>Active</option>
                              <option>In-active</option>
                                  <option>Blocked</option>
                            </select>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Update</button>
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