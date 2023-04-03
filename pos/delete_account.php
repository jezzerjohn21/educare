<?php
include '../dist/dbcon.php';
	$prod_id = $_GET['login'];
		$prod_id2 = $_GET['id2'];
			
$result=mysqli_query($con,"DELETE FROM my_distri WHERE id ='$prod_id2'")
	or die(mysqli_error());

	


	echo "<script>window.location='myaccount.php?login=$prod_id'</script>";  
	?>
	
