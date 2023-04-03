<?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                     
                     
                     
                     
                       <?php
              if($rowuser['gender']=="Male"){
              ?>
       
                 <img alt="image" src="male.fw.png" class="rounded-circle author-box-picture">
                
                     <?php
              }
              ?>
                       
              <?php
              if($rowuser['gender']=="Female"){
              ?>
              <img alt="image" src="female.fw.png" class="rounded-circle author-box-picture"> 
                
                
                     <?php
              }
              ?>
                     
                     
                     
                      
                      
                      
                      
                      
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $rowuser['firstname'];?> <?php echo $rowuser['lastname'];?></a>
                      </div>
                      
                      
                           <?php
              if($rowuser['type']=="0"){
              ?>
                      <div class="author-box-job">Administrator</div>
                      
                                       
                           <?php
              }
              ?>  
                                         <?php
              if($rowuser['type']=="1"){
              ?>
                      <div class="author-box-job">Staff</div>
                      
                                       
                           <?php
              }
              ?>     
                                                  <?php
              if($rowuser['type']=="2"){
              ?>
                      <div class="author-box-job">Operators</div>
                      
                                       
                           <?php
              }
              ?> 
                         <?php
              if($rowuser['type']=="3"){
              ?>
                      <div class="author-box-job">Rider</div>
                      
                                       
                           <?php
              }
              ?>  
                    </div>
                    <div class="text-center">
                 
                 
                 
                 
                      <div class="mb-2 mt-3">
                        <div class="text-small font-weight-bold">Referral Link:</div>
                      </div>
                     
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Gender
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowuser['gender'];?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowuser['contact'];?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                         <?php echo $rowuser['email'];?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Date Registered
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowuser['date_added'];?>
                        </span>
                      </p>
       
                    </div>
                  </div>
                </div>
                
                
                
                
                
                
              </div>
              
              
              
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    
         	<?php

if(isset($_POST['signin']))
{
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$id=$rowuser['id'];

if($password==$cpassword){


	mysqli_query($con,"update user set password='$password'
 where id='$id'")or die(mysqli_error());
	
		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='changepass.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Password Successfully Updated!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='changepass.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Password Mismatch", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}



}
?>           
                    
                    
                    
                    
                    
                    
                  <form method="POST">
                    <div class="card-header">
                      <h4>Change Password</h4>
                    </div>
                    <div class="card-body">
                        
             
                      <div class="form-group">
                        <label>New Password</label>
                        <input name="password" type="password" class="form-control" required="">
                      </div>
                         
                                  <div class="form-group">
                        <label>Confirm New Password</label>
                        <input name="cpassword" type="password" class="form-control" required="">
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