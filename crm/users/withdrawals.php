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

$bank_name=$_POST['bank_name'];
$bank_acc_name=$_POST['bank_acc_name'];
   $bank_acc_no=$_POST['bank_acc_no']; 
   
$query=mysqli_query($con,"select * from  withdrawals ")or die(mysqli_error());
$row=mysqli_fetch_array($query);
$count=$row['id']+1;
$code="W".date("ymd")."".$count."$id";

$query2=mysqli_query($con,"select * from  withdrawals where transaction_code='$code'")or die(mysqli_error());
$row2=mysqli_num_rows($query2);
if($row2<=0){
    
    
    $querytf=mysqli_query($con,"select * from  banks where name='$bank_name' ")or die(mysqli_error());
$rowtf=mysqli_fetch_array($querytf);
    $tf=$rowtf['tf'];
    
      $querytf2=mysqli_query($con,"select * from  maintenance  ")or die(mysqli_error());
$rowtf2=mysqli_fetch_array($querytf2);
    
    $vat=$amount*$rowtf2['vat'];
    
    
    
    $amount_final=$amount-$tf-$vat;
    
    $date=date("Y-m-d H:i");
    	mysqli_query($con,"update user set bank_name='$bank_name',bank_acc_name='$bank_acc_name',bank_acc_no='$bank_acc_no'
 where id='$id'")or die(mysqli_error());
		  mysqli_query($con,"INSERT INTO withdrawals(vat,tf,amount_final,bank_name,bank_acc_name,bank_acc_no,user_id,amount,status,transaction_code,date_added) VALUES('$vat','$tf','$amount_final','$bank_name','$bank_acc_name','$bank_acc_no','$id','$amount','Pending','$code','$date')")or die(mysqli_error($con));




	mysqli_query($con,"update user set wallet=wallet-'$amount'
 where id='$id'")or die(mysqli_error());
	
		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='withdrawals_history.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Requested!", "success");
 
}
</script>



<?php


}else{
    ?>
    
    	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='withdrawals_history.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Requested!", "success");
 
}
</script>
    
    
   <?php
    
    
    
    
}

}
?>              
           
           
           
           
           
           
           
           
           
           
           
              
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    
         
                    
                    
                    
                    
                    
                    
                  <form method="POST">
                    <div class="card-header">
                      <h4>Bank Destination </h4>
                    </div>
                    <div class="card-body">
                        
                 
                      <div class="form-group">
                        <label>Bank Name (ex. BDO,EASTWEST etc.)</label>
                        
                        
                        
                        <select name="bank_name" type="text" class="form-control" required="">
                        
                            <?php
                            if($rowuser['bank_name']!=""){
                            
                            ?> <option><?php echo $rowuser['bank_name'];?></option>
                                   <?php
                            }else{
                            
                            ?>
                            
                              <option value="">--Please Select Banck Destination--</option>
                              
                              
                                           <?php
                            }
                            
                            ?>
                              
                              
                            <?php
                            
                            $query=mysqli_query($con,"SELECT * FROM banks order by name asc ")or die(mysqli_error($con));
	while($row=mysqli_fetch_array($query)){
                            ?>
                            <option><?php echo $row['name'];?></option>
                            
                                          <?php
	}
                            ?>
                            </select>
                        
                        
                        
                        
                      </div>
                         
                        
                        
                        
                
                      <div class="form-group">
                        <label>Account Name (ex. Juan dela Cruz)</label>
                        <input value="<?php echo $rowuser['bank_acc_name']?>" name="bank_acc_name" type="text" class="form-control" required="">
                      </div>
                          
                       
    
                         
                        
                                  <div class="form-group">
         <label>Account No. (ex. 00000044356)</label>
                        <input name="bank_acc_no" type="text" value="<?php echo $rowuser['bank_acc_no']?>" class="form-control" required="">
                      </div>
                        
                    
                      <hr>
                      <?php
                      	$query21a1w=mysqli_query($con,"select * from  maintenance  ")or die(mysqli_error());
$row21a1aw=mysqli_fetch_array($query21a1w);
                      $min=$row21a1aw['min_w'];
                      ?>
                                              
                                  <div class="form-group">
         <label>Amount (Minimum of <?php echo number_format($min);?>)</label>
                        <input name="amount" type="number" min="<?php echo $min;?>" max="<?php echo $rowuser['wallet'];?>" value="" class="form-control" required="">
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