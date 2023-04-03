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
$query=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
	
	$querym=mysqli_query($con,"SELECT * FROM maintenance  ")or die(mysqli_error($con));
	$rowm=mysqli_fetch_array($querym);
	$operator_add=$rowm['operator_add'];

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
    $ses=$_SESSION['id'];
$id22=$_GET['id'];
$date=date("Y-m-d H:i");
$amount1=$_POST['amount'];
$amount2a=$_POST['amount'];
$amount=$amount1;

$querycc=mysqli_query($con,"select * from  company ")or die(mysqli_error());
$rowcc=mysqli_fetch_array($querycc);

$topupmain=$rowcc['topupmain'];

$remarks=$_POST['remarks'];

$query=mysqli_query($con,"select * from  funding_history ")or die(mysqli_error());
$row=mysqli_fetch_array($query);


$querym=mysqli_query($con,"select * from  maintenance ")or die(mysqli_error());
$rowm=mysqli_fetch_array($querym);

$count=$row['id']+1;

$rand=rand(10000,99999);

$code=$rand."F".date("ymd")."".$count;

$query2=mysqli_query($con,"select * from  funding_history where transaction_code='$code'")or die(mysqli_error());
$row2=mysqli_num_rows($query2);
if($row2<=0){
    
    $operator_add=$rowm['operator_add'];
    
    
    if($_POST['incen']=="Yes"){
    $amount2=$amount*$operator_add;
    }else{
        
        $amount2=0;
        
    }
    $minus=$amount2+$amount;
    if($topupmain>=$amount){
    
    
    
    

   mysqli_query($con,"update company set topupmain=topupmain-'$minus' ")or die(mysqli_error());
    
    
    
   	mysqli_query($con,"update user set top_wallet=top_wallet+'$amount' where id='$id22'")or die(mysqli_error());

	mysqli_query($con,"update user set wallet=wallet+'$amount2' where id='$id22'")or die(mysqli_error());
 
 
 	mysqli_query($con,"INSERT INTO funding_history(transaction_code,transfer_by,user_id,amount,remarks,date_added,type) VALUES('$code','$ses','$id22','$amount','$remarks','$date','Operator')")or die(mysqli_error($con));
 	
 	    if($_POST['incen']=="Yes"){
 	mysqli_query($con,"INSERT INTO funding_history(transaction_code,transfer_by,user_id,amount,remarks,date_added,type) VALUES('$code','$ses','$id22','$amount2','Additional percentage credited to your personal wallet.','$date','Operator')")or die(mysqli_error($con));
 
 

    }else{
 	
    }
 
	$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
	$date = date("Y-m-d H:i:s");
	
	mysqli_query($con,"INSERT INTO history_log(ip_add,user_id,remarks,date_added) VALUES('$ip','$id22','Add/Deduction Funds amounting  $amount in topup wallet.','$date')")or die(mysqli_error($con));
		
 	    if($_POST['incen']=="Yes"){
		mysqli_query($con,"INSERT INTO history_log(ip_add,user_id,remarks,date_added) VALUES('$ip','$id22','Add/Deduction Funds amounting  $amount2 in personal wallet.','$date')")or die(mysqli_error($con));
 	    }else{
 	        
 	        
 	    }
		  
	 echo "<script type='text/javascript'>alert('Successfully Topup!');</script>";
		 echo "<script>document.location='wallet_operator.php?id=$id22'</script>";  
				 
    }else{
      		  
	 echo "<script type='text/javascript'>alert('Not enough funds!');</script>";
				 echo "<script>document.location='wallet_operator.php?id=$id22'</script>";    
        
    }
	
		 
}else{
    	 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
				 echo "<script>document.location='wallet_operator.php?id=$id22'</script>";  
    
    
}


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Add/ Deduct Funds</h4>
                    </div>
                    <div class="card-body">
                        
                 <div class="form-group">
                        <label>Code *</label>
                        <input name="id_number" value="<?php echo $row['id_number'];?>" type="text" class="form-control" readonly="">
                      </div>
             
             
                      <div class="form-group">
                        <label>Username *</label>
                        <input name="username" value="<?php echo $row['username'];?>" type="text" class="form-control" readonly="">
                      </div>
        
                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" value="<?php echo $row['firstname'];?>" type="text" class="form-control" readonly="">
                      </div>
               
                                  <div class="form-group">
                        <label>Middlename *</label>
                        <input name="middlename" value="<?php echo $row['middlename'];?>" type="text" class="form-control" readonly="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" value="<?php echo $row['lastname'];?>" type="text" class="form-control" readonly="">
                      </div>
                      
                      
                      
                                       
                                  
                                         <div class="form-group">
                        <label>Personal Wallet </label>
                        <input name="" type="email" value="<?php echo number_format($row['wallet'],2);?>" class="form-control" readonly="">
                      </div>
                                               <div class="form-group">
                        <label>Top Up Wallet </label>
                        <input name="" type="email" value="<?php echo number_format($row['top_wallet'],2);?>" class="form-control" readonly="">
                      </div>
                      <hr>
                      
                               <div class="form-group">
                        <label>Personal Wallet Incentive *</label>
                        <select name="incen" type="text"  class="form-control" required="">
                             <option value="">--Please select--</option>
                            <option>Yes</option>
                             <option>No</option>
                            
                            </select>
                      </div>
                      
                      
                          <div class="form-group">
                        <label>Amount *</label>
                        <input name="amount" type="number" min="2000" class="form-control" required="">
                      </div>
                      
                                    <div class="form-group">
                        <label>Remarks *</label>
                        <textarea name="remarks" type="text"  class="form-control" required=""></textarea>
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