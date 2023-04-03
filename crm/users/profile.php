<?php

include('header.php');

?>
      <!-- Main Content -->
  <div style=" padding-left: 0px; padding-right: 0px;" class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                     
                     
                     <?php
                     
                     $reg=$rowuser['region'];
$queryregion=mysqli_query($con,"select * from  refregion where regCode='$reg' ")or die(mysqli_error());
$rowregion=mysqli_fetch_array($queryregion); 

$reg2=$rowuser['province'];
$queryregion2=mysqli_query($con,"select * from  refprovince where provCode='$reg2' ")or die(mysqli_error());
$rowregion2=mysqli_fetch_array($queryregion2); 


$reg3=$rowuser['city'];
$queryregion3=mysqli_query($con,"select * from  refcitymun where citymunCode='$reg3' ")or die(mysqli_error());
$rowregion3=mysqli_fetch_array($queryregion3); 



$reg4=$rowuser['barangay'];
$queryregion4=mysqli_query($con,"select * from  refbrgy where brgyCode='$reg4' ")or die(mysqli_error());
$rowregion4=mysqli_fetch_array($queryregion4); 
                     
                     ?>
                     
        
                 <img alt="image" src="male.fw.png" class="rounded-circle author-box-picture">
                
                     
                     
                     
                      
                      
                      
                      
                      
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $rowuser['firstname'];?> <?php echo $rowuser['lastname'];?> <?php echo $rowuser['suffix'];?></a>
                      </div>
                      
                      

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
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowuser['birthday'];?>
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
                          Region
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowregion['regDesc'];?>
                        </span>
                      </p>
                               <p class="clearfix">
                        <span class="float-left">
                          Province
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowregion2['provDesc'];?>
                        </span>
                      </p>
                               <p class="clearfix">
                        <span class="float-left">
                          Municipality/City
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowregion3['citymunDesc'];?>
                        </span>
                      </p>
                                         <p class="clearfix">
                        <span class="float-left">
                         Barangay
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowregion4['brgyDesc'];?>
                        </span>
                      </p>
                            <p class="clearfix">
                        <span class="float-left">
                          Address
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $rowuser['address'];?>
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
$bank_name=$_POST['bank_name'];
$bank_acc_name=$_POST['bank_acc_name'];
   $bank_acc_no=$_POST['bank_acc_no']; 
$id=$rowuser['id'];
	mysqli_query($con,"update user set bank_name='$bank_name',bank_acc_name='$bank_acc_name',bank_acc_no='$bank_acc_no'
 where id='$id'")or die(mysqli_error());
	
		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='profile.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Updated Bank Details!", "success");
 
}
</script>



<?php




}
?>           
                    
                    
                    
                    
                    
                    
                
                </div>
               
              </div>
            
              
              
              
              
              
             
            </div>
            
            
            
            
            
            
            
          </div>
        </section>
       
      </div>
     <?php
     
     include('footer.php');
     
     ?>