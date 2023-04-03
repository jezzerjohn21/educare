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
$query=mysqli_query($con,"SELECT * FROM withdrawals WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];
$remarks=$_POST['remarks'];
$date_deposited=$_POST['date_deposited'];
$status=$_POST['status'];

$sid=$rowuser['id'];

	mysqli_query($con,"update withdrawals set remarks='$remarks',date_deposited='$date_deposited',status='$status',approve_by='$sid'
 where id='$id'")or die(mysqli_error());
 
 
 
 

		  
		  
		  
	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='edit_withdrawals.php?id=$id'</script>";  
	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Update Bank Information</h4>
                    </div>
                    <div class="card-body">
                        
    
             
             
                      <div class="form-group">
                        <label>Remarks </label>
                        <textarea name="remarks" value="" type="text" class="form-control" ><?php echo $row['remarks'];?></textarea>
                      </div>
                                  
                      <div class="form-group">
                        <label>Date Deposited *</label>
                        <input name="date_deposited" value="<?php echo $row['date_deposited'];?>" type="date" class="form-control" required="">
                      </div>
                      
                                                  <div class="form-group">
                        <label>Withdrawal Status</label>
                        <select name="status" type="text" class="form-control" required="">
                            <option><?php echo $row['status'];?></option>
                            
                            
                            <option>Completed</option>
                              <option>Pending</option>
                                  <option>Hold</option>
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