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
              
              
              
$sid=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM maintenance ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$direct_r=$_POST['direct_r'];
$rider=$_POST['rider'];
$reward=$_POST['reward'];
$min_w=$_POST['min_w'];
$operator_add=$_POST['operator_add'];


$vat=$_POST['vat'];

$rate_km=$_POST['rate_km'];

$cash_handling=$_POST['cash_handling'];
$express=$_POST['express'];

$rate_km_sedan=$_POST['rate_km_sedan'];
$rate_km_mpv=$_POST['rate_km_mpv'];
$operator_percentage=$_POST['operator_percentage'];
$admin_percentage=$_POST['admin_percentage'];
$code_amount=$_POST['code_amount'];
$rider_add=$_POST['rider_add'];

$first_3=$_POST['first_3'];
$first_4=$_POST['first_4'];
$first_5=$_POST['first_5'];

	mysqli_query($con,"update maintenance set first_5='$first_5',first_4='$first_4',first_3='$first_3',rider_add='$rider_add',operator_add='$operator_add',express='$express', cash_handling='$cash_handling', rate_km_sedan='$rate_km_sedan',rate_km_mpv='$rate_km_mpv',vat='$vat',direct_r='$direct_r',min_w='$min_w',rider='$rider',reward='$reward',rate_km='$rate_km',operator_percentage='$operator_percentage',admin_percentage='$admin_percentage',code_amount='$code_amount'")or die(mysqli_error());

		  
		  
	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='rates.php?id=$id'</script>";  
	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>System Rating Configuration</h4></h4>
                    </div>
                    <div class="card-body">
                                   <div class="form-group">
                        <label>Operator TOP UP Additional Percentage *</label>
                        <input name="operator_add" value="<?php echo $row['operator_add'];?>" type="text" class="form-control" required="">
                      </div>
                      
                                          <div class="form-group">
                        <label>Rider TOP UP Additional Percentage *</label>
                        <input name="rider_add" value="<?php echo $row['rider_add'];?>" type="text" class="form-control" required="">
                      </div>
                      
            <div class="form-group">
                        <label>Direct Referrals *</label>
                        <input name="direct_r" value="<?php echo $row['direct_r'];?>" type="text" class="form-control" required="">
                      </div>
             
                      <div class="form-group">
                        <label>Rider Count Per Code *</label>
                        <input name="rider" value="<?php echo $row['rider'];?>" type="text" class="form-control" required="">
                      </div>
                                 <div class="form-group">
                        <label>Lump sum *</label>
                        <input name="reward" value="<?php echo $row['reward'];?>" type="reward" class="form-control" required="">
                      </div>
                             <div class="form-group">
                        <label>Rate/Km (Motorcycle) *</label>
                        <input name="rate_km" value="<?php echo $row['rate_km'];?>" type="text" class="form-control" required="">
                      </div>
                      
                               <div class="form-group">
                        <label>First three km (Motorcycle) *</label>
                        <input name="first_3" value="<?php echo $row['first_3'];?>" type="text" class="form-control" required="">
                      </div>
                      
                                       <div class="form-group">
                        <label>Rate/Km (Sedan) *</label>
                        <input name="rate_km_sedan" value="<?php echo $row['rate_km_sedan'];?>" type="text" class="form-control" required="">
                      </div>
                                      <div class="form-group">
                        <label>First three km (Sedan) *</label>
                        <input name="first_4" value="<?php echo $row['first_4'];?>" type="text" class="form-control" required="">
                      </div>
                                       <div class="form-group">
                        <label>Rate/Km (MPV) *</label>
                        <input name="rate_km_mpv" value="<?php echo $row['rate_km_mpv'];?>" type="text" class="form-control" required="">
                      </div>
                         <div class="form-group">
                        <label>First three km (MPV) *</label>
                        <input name="first_5" value="<?php echo $row['first_5'];?>" type="text" class="form-control" required="">
                      </div>
                       <div class="form-group">
                        <label>Operator's Percentage *</label>
                        <input name="operator_percentage" value="<?php echo $row['operator_percentage'] ;?>" type="text" class="form-control" required="">
                      </div>
                 <div class="form-group">
                        <label>TAX Percentage*</label>
                        <input name="vat" value="<?php echo $row['vat'] ;?>" type="text" class="form-control" required="">
                      </div>
               <div class="form-group">
                        <label>Company's Percentage *</label>
                        <input name="admin_percentage" value="<?php echo $row['admin_percentage'];?>" type="text" class="form-control" required="">
                      </div>
                   <div class="form-group">
                        <label>Code Amount *</label>
                        <input name="code_amount" value="<?php echo $row['code_amount'];?>" type="text" class="form-control" required="">
                      </div>
                      
                      
                              <div class="form-group">
                        <label>Withdrawal's Minimum Amount *</label>
                        <input name="min_w" value="<?php echo $row['min_w'];?>" type="text" class="form-control" required="">
                      </div>
                      
                      
                      
                                    <div class="form-group">
                        <label>Express Charge *</label>
                        <input name="express" value="<?php echo $row['express'];?>" type="text" class="form-control" required="">
                      </div>
                                           <div class="form-group">
                        <label>Cash Handling *</label>
                        <input name="cash_handling" value="<?php echo $row['cash_handling'];?>" type="text" class="form-control" required="">
                      </div>
                      
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Update</button>
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