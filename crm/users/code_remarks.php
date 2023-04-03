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
$query=mysqli_query($con,"SELECT * FROM code WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];
$status=$_POST['remarks'];
$code=$row['code'];
	mysqli_query($con,"update code set remarks='$status' where id='$id'")or die(mysqli_error());
	$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
	$date = date("Y-m-d H:i:s");
	 	mysqli_query($con,"INSERT INTO history_log(ip_add,user_id,remarks,date_added) VALUES('$ip','$id','Update Remarks for the code $code.','$date')")or die(mysqli_error($con));
	
		  
		  
		  
	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='code_lists.php?id=$id'</script>";  
	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Code Remarks</h4>
                    </div>
                    <div class="card-body">
                        

             
                      <div class="form-group">
                        <label>Remarks *</label>
                        <textarea name="remarks" value="" type="text" class="form-control" required=""><?php echo $row['remarks'];?></textarea>
                      </div>
                         
          
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Submit</button>
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