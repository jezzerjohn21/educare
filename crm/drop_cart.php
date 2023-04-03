<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['id'];
	$prod_id2 = $_GET['login'];
			
$result=mysqli_query($con,"DELETE FROM temp_prod WHERE store ='$prod_id' and status='Pending'")
	or die(mysqli_error());

	


	echo "<script>window.location='store.php?login=$prod_id2'</script>";  
	?>
	
