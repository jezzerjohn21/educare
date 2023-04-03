
<?php 

include('head.php');

?>

                      
                      
<?php

$added_by=$_GET['login'];
$date_added=date("Y-m-d H:i");
			$cus=$_GET['cus'];		
	$dis=$_GET['dis'];
					
			
$result=mysqli_query($con,"DELETE FROM cart_dis WHERE id ='$dis'")
	or die(mysqli_error());

					
					
					
				         echo "<script>document.location='discount.php?login=$added_by&cus=$dis'</script>";  
    	
													
													
							
													
													
					?>
					
					