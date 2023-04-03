<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['id2'];
		$prod_id2 = $_GET['login'];
				$prod_id22 = $_GET['id'];
$result=mysqli_query($con,"DELETE FROM discount_tag WHERE id ='$prod_id'")
	or die(mysqli_error());

	


	echo "<script>window.location='add_discount_tags.php?login=$prod_id2&id=$prod_id22'</script>";  
	?>
	
