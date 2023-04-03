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
$query=mysqli_query($con,"SELECT * FROM banks WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];
$name=$_POST['name'];
$tf=$_POST['tf'];

	mysqli_query($con,"update banks set name='$name',tf='$tf'
 where id='$id'")or die(mysqli_error());
	$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
	$date = date("Y-m-d H:i:s");
	 	mysqli_query($con,"INSERT INTO history_log(ip_add,user_id,remarks,date_added) VALUES('$ip','$id','Update the bank details ','$date')")or die(mysqli_error($con));
	
		  
		  
		  
	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='destination.php?id=$id'</script>";  
	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Update Bank Information</h4>
                    </div>
                    <div class="card-body">
                        
    
             
             
                      <div class="form-group">
                        <label>Bank Name *</label>
                        <input name="name" value="<?php echo $row['name'];?>" type="text" class="form-control" required="">
                      </div>
                                  
                      <div class="form-group">
                        <label>Transaction Fee *</label>
                        <input name="tf" value="<?php echo $row['tf'];?>" type="text" class="form-control" required="">
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