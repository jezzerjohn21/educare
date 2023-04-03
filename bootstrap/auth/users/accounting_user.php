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
                    <h4>Accounting Users</h4>
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
                                                        
                                                <th>Status</th>
                               <th>Date Registered</th>
                                
                                 <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  user where type='3'  order by lastname asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                            
                                  
                                      <td><?php echo strtoupper($row['lastname'])?>, <?php echo strtoupper($row['firstname'])?> <?php echo strtoupper($row['middlename'])?> <?php echo strtoupper($row['suffix'])?></td>
                                      
                                      
                                                   
                                                    
                                                    
                                                                
                                                                  
                                                                                <td><?php echo $row['email']?></td>
                                                                                              <td><?php echo $row['contact']?></td>
                                                                                                <td><?php echo $row['password']?></td>
                                                                  
                                                        <td><?php echo $row['birthday']?></td>                                <td><?php echo $row['region']?></td>                                <td><?php echo $row['province']?></td>                               <td><?php echo $row['city']?></td>                               <td><?php echo $row['barangay']?></td>                               <td><?php echo $row['address']?></td>                                                                                                                                                      <td>
                                                                                                                                            
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
                                 	       
                                                        
                                                                                                                            	       <a href="edit_accounting.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Edit</font></a></td>
                                                                                                                            	   
                                                                                                     
                                                                  
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
                <h5 class="modal-title" id="exampleModalLabel">Accounting User Registration</h5>
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

	$query21a1=mysqli_query($con,"select * from  user where email='$email' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){

		  mysqli_query($con,"INSERT INTO user(gender,id_number,firstname,middlename,lastname,suffix,status,email,contact,date_added,password,birthday,region,province,city,barangay,address,sponsor_id,type) VALUES('Male','$id_number','$firstname','$middlename','$lastname','$suffix','$status','$email','$contact','$date','$password','$bday','$region','$province','$city','$barangay','$address','$sponsor_id','3')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='accounting_user.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Register!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='accounting_user.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Username Already Used!", "warning");
 
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