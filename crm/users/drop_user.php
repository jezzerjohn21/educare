<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['id'];
	
			
$result=mysqli_query($con,"DELETE FROM user WHERE id ='$prod_id'")
	or die(mysqli_error());

	


	echo "<script>window.location='dashboard.php'</script>";  
	?>
	
