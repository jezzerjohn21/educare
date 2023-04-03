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
              
              
           
           
           
           
           
        	<?php

if(isset($_POST['signin']))
{
$amount=$_POST['amount'];
$id=$rowuser['id'];

$date=date("Y-m-d H:i");

$queryss=mysqli_query($con,"select * from  funding_history where user_id='$id' order by id desc ")or die(mysqli_error());
$rowss=mysqli_fetch_array($queryss);
$count=mysqli_num_rows($queryss)+1;
$code="F".date("ymd")."".$count;
	 	mysqli_query($con,"INSERT INTO funding_history(transaction_code,transfer_by,user_id,amount,remarks,date_added,type) VALUES('$code','$id','$id','$amount','Personal Wallet to Top Up Wallet','$date','Operator')")or die(mysqli_error($con));
 
mysqli_query($con,"update user set wallet=wallet-'$amount'
 where id='$id'")or die(mysqli_error());
 
 
mysqli_query($con,"update user set top_wallet=top_wallet+'$amount'
 where id='$id'")or die(mysqli_error());
	
		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='add_topup.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Transfered!", "success");
 
}
</script>



    
    
   <?php
    
    
    
    


}
?>              
           
           
           
           
           
           
           
           
           
           
           
              
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    
         
                    
                    
                    
                    
                    
                    
                  <form method="POST">
                    <div class="card-header">
                      <h4>Personal Wallet to Top Up Waller</h4>
                    </div>
                    <div class="card-body">
                        
                 
       
                              <div class="form-group">
         <label>Remaining Personal Wallet</label>
                        <input name="per"  value="<?php echo $rowuser['wallet'];?>"  class="form-control" readonly="">
                      </div>
                      
                                              
                                  <div class="form-group">
         <label>Amount to transfer (Minimum of 50)</label>
                        <input name="amount" type="number" min="50" max="<?php echo $rowuser['wallet'];?>" value="" class="form-control" required="">
                      </div>
                      
               
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Transfer</button>
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