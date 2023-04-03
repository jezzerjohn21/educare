<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['id'];
	
			
$result=mysqli_query($con,"DELETE FROM category WHERE id ='$prod_id'")
	or die(mysqli_error());

	


	echo "<script>window.location='category.php'</script>";  
	?>
	
