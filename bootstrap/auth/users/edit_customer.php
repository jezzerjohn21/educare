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
$query=mysqli_query($con,"SELECT * FROM customer WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];



$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$suffix=$_POST['suffix'];
$status=$_POST['status'];


$bday=$_POST['bday'];
$region=$_POST['region'];
$province=$_POST['province'];
$city=$_POST['city'];
$barangay=$_POST['barangay'];

$address=$_POST['address'];



	mysqli_query($con,"update customer set firstname='$firstname',lastname='$lastname',middlename='$middlename',suffix='$suffix',email='$email',contact='$contact'
,status='$status',birthday='$bday',region='$region',province='$province',city='$city',barangay='$barangay',address='$address'
 where id='$id'")or die(mysqli_error());

		  
		  
		  
		  
		  
		  ?>
		  
		  
		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='customer.php';
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
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Update User Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">
        
              

      <div class="col-12 col-md-12 col-lg-12"> 
                
                    <p>ACCOUNT INFORMATION</p>
                    
                    
                     </div>


                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" value="<?php echo $row['email'];?>" class="form-control" required="">
                      </div>
                   </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                      
                                         <div class="form-group">
                        <label>Contact Number *</label>
                        <input name="contact" value="<?php echo $row['contact'];?>" type="text" class="form-control" required="">
                      </div>
                       </div>
                      

                      
     
      
                      
                      
                                <div class="col-12 col-md-12 col-lg-12"> 
                
                    <p>PERSONAL DETAILS</p>
                    
                    
                     </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                      
                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" value="<?php echo $row['firstname'];?>"type="text" class="form-control" required="">
                      </div>
                </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                  <div class="form-group">
                        <label>Middlename *</label>
                        <input name="middlename" value="<?php echo $row['middlename'];?>"type="text" class="form-control" required="">
                      </div>
                       </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" value="<?php echo $row['lastname'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                      
                                                     <div class="form-group">
                        <label>Suffix Name i.e. Jr, Sr, III (Optional)</label>
                        <input value="<?php echo $row['suffix'];?>"name="suffix" type="text" class="form-control" >
                      </div>
                       </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                <div class="form-group">
                        <label>Birthday *</label>
                        <input name="bday" value="<?php echo $row['birthday'];?>"type="date" class="form-control" required="">
                      </div>
                      
                       </div>
                      
                      
                                <div class="col-12 col-md-12 col-lg-12"> 
                        <p>HOME ADDRESS</p>
                         </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                        
                                                    <div class="form-group">
                        <label>Region *</label>
                        <input name="region" value="<?php echo $row['region'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                      
                                                    <div class="form-group">
                        <label>Province *</label>
                        <input name="province" value="<?php echo $row['province'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                         <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="city" value="<?php echo $row['city'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                                 <div class="form-group">
                        <label>Barangay *</label>
                        <input name="barangay" value="<?php echo $row['barangay'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                               <div class="form-group">
                        <label>Block No., Street, Village etc. *</label>
                        <input name="address" value="<?php echo $row['address'];?>" type="text" class="form-control" required="">
                      </div>
                                 </div>
                      
            











           
                                   
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Status</label>
                        <select name="status" type="text" class="form-control" required="">
                            <option><?php echo $row['status'];?></option>
                            <option>Active</option>
                              <option>In-active</option>
                            </select>
                      </div>
                               </div>
                               
                               
               
                    </div>
                               </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Update Customer Information</button>
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