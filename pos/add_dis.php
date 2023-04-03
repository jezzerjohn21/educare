
<?php 

include('head.php');

?>

                      
                      
<?php

$added_by=$_GET['login'];
$date_added=date("Y-m-d H:i");
			$cus=$_GET['cus'];		
	$dis=$_GET['dis'];
					
		  mysqli_query($con,"INSERT INTO cart_dis(added_by,cust_id,dis_id) VALUES('$added_by','$cus','$dis')")or die(mysqli_error($con));
					
					
					
					
					
				         echo "<script>document.location='discount.php?login=$added_by&cus=$cus'</script>";  
    	
													
													
							
													
													
					?>
					
					