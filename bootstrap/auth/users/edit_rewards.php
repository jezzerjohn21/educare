<?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row">
        
              
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                 
              <?php
              
              
              
$sid=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM rewards WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];

$prod_code=$_POST['name'];
$type=$_POST['type'];
$percentage=$_POST['percentage'];
$exp=$_POST['exp'];
	mysqli_query($con,"update rewards set expiration='$exp',name='$prod_code',type='$type',percentage='$percentage'  where id='$id'")or die(mysqli_error());
    
    

		  
		  
		  
		  ?>
		  
		  
		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='rewards.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Updated!", "success");
 
}
</script>

		  
		  <?php
		  
		  

	
		 


		





}


?>           
                  <form method="POST"  enctype='multipart/form-data'>  
                    <div class="card-header">
                                 
                      <h4>Update Rewards Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">





                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Rewards Name *</label>
                        <input name="name" type="text" value="<?php echo $row['name'];?>" class="form-control" required="">
                      </div>
                   </div>
                      
                              <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Amount/Percentage*</label>
                        <input name="percentage" value="<?php echo $row['percentage'];?>" type="text" class="form-control" required="">
                      </div>
                                   </div>     
                                   
                                   
                                   
                                   
                                   
                                   
                                                        <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Expiration*</label>
                        <input name="exp" value="<?php echo $row['expiration'];?>" type="date" class="form-control" required="">
                      </div>
                                   </div>      
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   <div class="col-12 col-md-4 col-lg-4">       
                                         <div class="form-group">
                        <label>Type *</label>
                        <select name="type" type="text" class="form-control" required="">
                            <option ><?php echo $row['type'];?></option>
                            <option>Percentage</option>
                              <option>Fixed</option>
                            </select>
                      </div>    
                 </div>
                               
                               
               
                    </div>
                               </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Update Information</button>
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