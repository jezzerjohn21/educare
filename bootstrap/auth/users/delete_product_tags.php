<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['id'];
		$prod_id2 = $_GET['id2'];
			
$result=mysqli_query($con,"DELETE FROM product_tag WHERE id ='$prod_id'")
	or die(mysqli_error());

	


	echo "<script>window.location='add_product_tags.php?id=$prod_id2'</script>";  
	?>
	
