
<?php 

include('head.php');

?>
   <?php
                      
	$query21a1=mysqli_query($con,"select * from  sales ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
                      
             
       if($row21a1a<=0){   
                       $number = 1; 
       }else{
           
            $number = $row21a1a+1; 
       }

  
  
$number = sprintf('%06d',$number);
                      
                      
                      
                      
                                 
	$query21a1a=mysqli_query($con,"select * from  sales where invoice='$number'")or die(mysqli_error());
$row21a1aa=mysqli_num_rows($query21a1a);           
                      
                      
                      
                      
                      ?>
                      
                      
<?php
	if($row21a1aa<=0){				
$payment_option=$_POST['payment_option'];
$quantity=$_POST['quantity'];
$gt=$_POST['tot2'];
$dis=$_POST['dis'];
$tot2=$_POST['gt'];
$amount=$_POST['amount'];
$added_by=$_GET['login'];
$date_added=date("Y-m-d H:i");
$tax=$_POST['tax'];
			$cus=$_GET['cus'];		
		if($amount>=$gt){
		    $change=$amount-$gt;
		    
		}else{
		    $change=0;
		    
		}			
					
								
		if($gt>=$amount){
		    $bal=$gt-$amount;
		    
		}else{
		    $bal=0;
		    
		}			
			if($bal>=1){
			    
			    $status="Pending";
			}else{
			    
			    
			    $status='Paid';
			}
			
					
		  mysqli_query($con,"INSERT INTO sales(tax,discount,sub_total,added_by,cust_id,invoice,grand_total,amount,change_amount,payment_option,no_month,balance,date_added,status) VALUES('$tax','$dis','$tot2','$added_by','$cus','$number','$gt','$amount','$change','$payment_option','$quantity','$bal','$date_added','$status')")or die(mysqli_error($con));
					
					
					
			mysqli_query($con,"update cart set cust_id='$cus', status='Check Out',invoice_no='$number' where added_by='$added_by' and status=''")or die(mysqli_error());			
					
					
						mysqli_query($con,"update cart_dis set cust_id='$cus', status='Check Out',invoice_no='$number' where added_by='$added_by' and status=''")or die(mysqli_error());
					
					
				         echo "<script>document.location='receipt.php?login=$added_by&invoice=$number'</script>";  
    	
													
													
	}								
													
													
					?>
					
					