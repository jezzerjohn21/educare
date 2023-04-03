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
$query=mysqli_query($con,"SELECT * FROM points WHERE id='1' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];

$prod_code=$_POST['name'];
$type=$_POST['customer'];
$percentage=$_POST['percentage'];

	mysqli_query($con,"update points set dis='$prod_code',customer='$type',dealer='$percentage'  where id='1'")or die(mysqli_error());
    
    

		  
		  
		  
		  ?>
		  
		  
		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='maintenance.php';
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
                                 
                      <h4>Update Points Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">





                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Distributor Points *</label>
                        <input name="name" type="text" value="<?php echo $row['dis'];?>" class="form-control" required="">
                      </div>
                   </div>
                      
                              <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Dealer Points*</label>
                        <input name="percentage" value="<?php echo $row['dealer'];?>" type="text" class="form-control" required="">
                      </div>
                                   </div>           
                               
                                <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Customer Points*</label>
                        <input name="customer" value="<?php echo $row['customer'];?>" type="text" class="form-control" required="">
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