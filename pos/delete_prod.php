<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['id'];
		$prod_id2 = $_GET['id2'];
			
$result=mysqli_query($con,"DELETE FROM products WHERE id ='$prod_id'")
	or die(mysqli_error());

	


	echo "<script>window.location='product.php?login=$prod_id2'</script>";  
	?>
	
