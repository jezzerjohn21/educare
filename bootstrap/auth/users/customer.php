<?php

include('header.php');

?>
<style>
    
    div.b {
  position: absolute;
  right: 0;
  width: 200px;


} 
    
</style>
      <!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Customer Account</h4>
                    <div class="b">
                        
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal"><font color="white"><i
                  data-feather="plus"></i>Add Account</font></button>
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
                        <th>Account Number</th>
                                               <th>Points</th>
                        <th>Name</th>
                         <th>Email</th>
                         <th>Contact Number</th>
                        <th>Password</th>
                          
                        
                            <th>Birthday</th>
                                <th>Region</th>
                                    <th>Province</th>
                                        <th>City/Municipality</th>
                                            <th>Barangay</th>
                                                <th>Block No., Street, Village</th>
                                                         <th>Referred By</th>
                                                <th>Status</th>
                               <th>Date Registered</th>
                                
                                 <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  customer  order by lastname asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  

$reg=$row['region'];
$queryregion=mysqli_query($con,"select * from  refregion where regCode='$reg' ")or die(mysqli_error());
$rowregion=mysqli_fetch_array($queryregion); 

$reg2=$row['province'];
$queryregion2=mysqli_query($con,"select * from  refprovince where provCode='$reg2' ")or die(mysqli_error());
$rowregion2=mysqli_fetch_array($queryregion2); 


$reg3=$row['city'];
$queryregion3=mysqli_query($con,"select * from  refcitymun where citymunCode='$reg3' ")or die(mysqli_error());
$rowregion3=mysqli_fetch_array($queryregion3); 



$reg4=$row['barangay'];
$queryregion4=mysqli_query($con,"select * from  refbrgy where brgyCode='$reg4' ")or die(mysqli_error());
$rowregion4=mysqli_fetch_array($queryregion4); 

$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                                 
                                      <td><?php echo $row['id_number']?></td>
                                          <td><?php echo $row['points']?></td>
                                      
                                      <td><?php echo strtoupper($row['lastname'])?>, <?php echo strtoupper($row['firstname'])?> <?php echo strtoupper($row['middlename'])?> <?php echo strtoupper($row['suffix'])?></td>
                                      
                                      
                                                   
                                                    
                                                    
                                                                
                                                                  
                                                                                <td><?php echo $row['email']?></td>
                                                                                              <td><?php echo $row['contact']?></td>
                                                                                                <td><?php echo $row['password']?></td>
                                                                  
                                                        <td><?php echo $row['birthday']?></td>                                <td><?php echo $rowregion['regDesc']?></td>                                <td><?php echo $rowregion2['provDesc']?></td>                               <td><?php echo $rowregion3['citymunDesc']?></td>                               <td><?php echo $rowregion4['brgyDesc']?></td>                               <td><?php echo $row['address']?></td>                                  <td><?php echo $row['sponsor_id']?></td>                                                                                                                      <td>
                                                                                                                                            
                                              <?php
                                   if($row['status']=="Active"){?>
                                   
                                   <div class="badge badge-success badge-shadow"><?php echo $row['status'];?>
                                   
                                   </div> 
                                  
                                   <?php
                                   }
                                   
                                   ?>
                                                   
                                       <?php
                                   if($row['status']=="In-active"){?><div class="badge badge-danger badge-shadow"><?php echo $row['status'];?></div> 
                                  
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                                                      <?php
                                   if($row['status']=="Blocked"){?><div class="badge badge-info badge-shadow"><?php echo $row['status'];?></div> 
                               
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                                 
                                                                                                                                            
                                                                                                                                            </td>                                                                                                       
                                                                                                                          <td><?php echo $row['date_added']?></td>
                                                                                
                                                                                                                                            
                                                                                                                            	   <td>
                                 	       
                                                        
                                                                                                                            	       <a href="edit_customer.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
                                                                                                                            	   
                                                                                                     
                                                                  
                          </tr>
                          
                          
                          
                          
                          
                          

                          
                          
                          <?php
}
                          
                          ?>
                    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              
              	<?php

if(isset($_POST['signin']))
{
$id_number=$_POST['id_number'];
$password=$_POST['password'];
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$suffix=$_POST['suffix'];
$status="Active";

$date=date("Y-m-d H:i");

$bday=$_POST['bday'];
$region=$_POST['region'];
$province=$_POST['province'];
$city=$_POST['city'];
$barangay=$_POST['barangay'];

$address=$_POST['address'];
$sponsor_id=$_POST['sponsor_id'];

	$query21a1=mysqli_query($con,"select * from  customer where email='$email' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){

		  mysqli_query($con,"INSERT INTO customer(email,contact,date_added,sponsor_id) VALUES('$email','$contact','$date','$sponsor_id')")or die(mysqli_error($con));
		  
		  
		  

					  echo "<script>document.location='signup_part2.php?email=$email'</script>";
		  
		
?>





<?php
}else{
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

swal("Ops!", "Email Already Registered!", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}



}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                  
              
                <form method="POST">
              <div class="modal-body">
                  
                  
                  

      
             
                        <input name="id_number" value="<?php echo $id_n;?>" type="hidden" class="form-control" readonly="">
                           <h3>Account Information </h3>
                    <p>Please fill up the form below. </p>
                <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Contact Number *</label>
                        <input name="contact" type="text" class="form-control" required="">
                      </div>
                      
                                                       <div class="form-group">
                        <label>Referred By (Optional)</label>
                        <input name="sponsor_id" type="text" class="form-control" required="">
                      </div>
             
              
                         
                <div class="form-group">
                        <label>Password *</label>
                        <input name="password" type="password" class="form-control" required="">
                      </div>
                      
      
                      
                      <hr>
                      
                        <h3>Personal Information</h3>
                    <p>PERSONAL DETAILS</p>
                      
                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" type="text" class="form-control" required="">
                      </div>
               
                                  <div class="form-group">
                        <label>Middlename *</label>
                        <input name="middlename" type="text" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" type="text" class="form-control" required="">
                      </div>
                      
                                                     <div class="form-group">
                        <label>Suffix Name i.e. Jr, Sr, III (Optional)</label>
                        <input name="suffix" type="text" class="form-control" >
                      </div>
                      
                                                <div class="form-group">
                        <label>Birthday *</label>
                        <input name="bday" type="date" class="form-control" required="">
                      </div>
                        <p>HOME ADDRESS</p>
                        
                        
                                                    <div class="form-group">
                        <label>Region *</label>
                        <input name="region" type="text" class="form-control" required="">
                      </div>
                                      
                                                    <div class="form-group">
                        <label>Province *</label>
                        <input name="province" type="text" class="form-control" required="">
                      </div>
                                                         <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="city" type="text" class="form-control" required="">
                      </div>
                                                                 <div class="form-group">
                        <label>Barangay *</label>
                        <input name="barangay" type="text" class="form-control" required="">
                      </div>
                                                               <div class="form-group">
                        <label>Block No., Street, Village etc. *</label>
                        <input name="address" type="text" class="form-control" required="">
                      </div>
                                      
      
                      
           
           
             
      
      
      
      
      
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button name="signin" type="submit" class="btn btn-primary">Create Account</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              
                   </form>
            </div>
          </div>
        </div>
      </div>
    <?php
    include('footer.php');
    
    ?>