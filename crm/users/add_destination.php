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
  
$name=$_POST['name'];
$tf=$_POST['tf'];


	$query21a1=mysqli_query($con,"select * from  banks where name='$name' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){

		  mysqli_query($con,"INSERT INTO banks(name,tf) VALUES('$name','$tf')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='destination.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Added!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='add_destination.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Bank Already Exists!", "warning");
 
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
                                 
                      <h4>Bank Details</h4>
                    </div>
                    <div class="card-body">
                        
          
             
             
                      <div class="form-group">
                        <label>Bank Name *</label>
                        <input name="name" type="text" class="form-control" required="">
                      </div>
                         
                <div class="form-group">
                        <label>Transaction Fee *</label>
                        <input name="tf" type="text" class="form-control" required="">
                      </div>
                             
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Add</button>
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