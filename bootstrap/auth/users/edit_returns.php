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
$query=mysqli_query($con,"SELECT * FROM returns WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);


?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];
$prod_id=$row['prod_id'];
$action=$row['type'];
$store_id=$row['store_id'];
$remark_sa=$_POST['remark_sa'];
$status=$_POST['status'];
$qty=$row['qty'];
$upon=date("Y-m-d H:i");
$up=$_SESSION['id'];


if($status=="APPROVED"){
    
        
   $queryp1=mysqli_query($con,"SELECT * FROM products WHERE id='$prod_id' ")or die(mysqli_error($con));
	$rowp1=mysqli_fetch_array($queryp1);
    
    $prod_code=$rowp1['prod_code'];
    
    $prod_no2=$rowp1['prod_no'];
    
 



	mysqli_query($con,"update products set prod_qty=prod_qty+'$qty' where prod_no='$prod_no2'")or die(mysqli_error());

    







}

	mysqli_query($con,"update returns set status='$status',remarks_sa='$remark_sa' where id='$id'")or die(mysqli_error());


		  
		  
		  
		  
		  ?>
		  
	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='returns_lists.php';
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
                                 
                      <h4>Update Returns Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">


         
         
         

         
         
           <div class="col-12 col-md-4 col-lg-12"> 
             </div>
                      
         

                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Approver's Remarks *</label>
                        <textarea name="remark_sa" type="text" value="" class="form-control" required=""><?php echo $row['remarks_sa'];?></textarea>
                      </div>
                   </div>
                      
                      
                                     

                                       
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Status</label>
                        <select name="status" type="text" class="form-control" required="">
                            <option><?php echo $row['status'];?></option>
                            <option>APPROVED</option>
                              <option>REJECTED</option>
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