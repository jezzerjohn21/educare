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
$query=mysqli_query($con,"SELECT * FROM company ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$direct_r=$_POST['email'];
$rider=$_POST['cp'];
$reward=$_POST['tel'];
$min_w=$_POST['web'];


	mysqli_query($con,"update company set email='$direct_r', cp='$rider', tel='$reward',web='$min_w'")or die(mysqli_error());

		  
		  
	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='company.php?id=$id'</script>";  
	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>System Company Configuration</h4></h4>
                    </div>
                    <div class="card-body">
                        
            <div class="form-group">
                        <label>Website *</label>
                        <input name="web" value="<?php echo $row['web'];?>" type="text" class="form-control" required="">
                      </div>
             
                             <div class="form-group">
                        <label>Mobile *</label>
                        <input name="cp" value="<?php echo $row['cp'];?>" type="text" class="form-control" required="">
                      </div>
             
                       <div class="form-group">
                        <label>Telephone *</label>
                        <input name="tel" value="<?php echo $row['tel'];?>" type="text" class="form-control" required="">
                      </div>
             
                       <div class="form-group">
                        <label>Email *</label>
                        <input name="email" value="<?php echo $row['email'];?>" type="text" class="form-control" required="">
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