<?php
include('head.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loyaleadsta</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
		<link rel="stylesheet" href="styles/dashboard.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
	</head>
	<body>
		<div id="T_15A_POS_Inventory">
			<svg class="Rectangle_1637_cm">
				<linearGradient id="Rectangle_1637_cm" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_cm" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Inventory">
				<span>Dashboard</span>
			</div>
			<?php
				include('side.php');
			?>
			<div class="dashboard-wrapper">
				<div class="shops-nearme-cnt">
					<h2>Shops Near Me</h1>
					<p><a style="text-decoration: none;" href="store.php?login=<?php echo $sid;?>"><font color="green">Explore More ></font></a></p>
				</div>
				<div class="shops-nearme-cards-cnt">
				    
				    
				     <?php
     include('../dist/dbcon.php');

session_start();
date_default_timezone_set("Asia/Manila"); 

if($_GET['login']==""){
    
    
    
}else{
    
        $_SESSION['id']=$_GET['login'];
}



$sid=$_SESSION['id'];
$queryusers=mysqli_query($con,"SELECT * FROM customer WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);


$region=$rowuser['region'];
         ?>
						
						
						
					<?php

      include('../dist/dbcon.php');

?>


<?php
$query=mysqli_query($con,"SELECT * FROM user WHERE type='2' and region='$region' order by business_name asc")or die(mysqli_error($con));
	while($row=mysqli_fetch_array($query)){
	    
	    
	    
	    
	 $region=$row['region'];
	    
$queryr=mysqli_query($con,"SELECT * FROM refregion WHERE regCode='$region'")or die(mysqli_error($con));
	$rowr=mysqli_fetch_array($queryr);
	    
	

?>


				



			    
				    
				    
				    
				<a style="text-decoration: none;" href="product.php?login=<?php echo $_GET['login'];?>&id=<?php echo $row['id'];?>">	<div class="shops-nearme-cards">
						<img src="../pos/uploads/<?php echo $row['logo'];?>" alt="Avatar"> 
						<h4><font color="black"><?php echo $row['business_name'];?></font></h4>
						<form class="rating">
							<label>
								<input type="radio" name="stars" value="5" />
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span>4.9</span>
							</label>
						</form>
						<h5><i class="fa fa-user"></i> <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></h5>
						<h6><i style="font-family: FontAwesome; font-style: normal">&#xf041;</i><?php echo $rowr['regDesc'];?> <?php echo $rowr['provDesc'];?></h6>
					</div>
					</a>
					
					<?php

}
?> 
	
					
					
					
	
				</div>
				<div class="shops-nearme-cnt">
					<h2>Incentives</h1>
					<p>View All ></p>
				</div>	
				<div class="incentive-row">
					<div class="incentive-column">
						<div class="incentive-card">
							<img src="images/Group 2240.png" alt="Avatar"> 
							<div>
								<h4>Insert Rebate Title Lorem Vivamus Nullam</h4>
								<h6>Expiring in 3 days</h6>
							</div>
						</div>
					</div>
					<div class="incentive-column">
						<div class="incentive-card">
							<img src="images/Group 2240.png" alt="Avatar"> 
							<div>
								<h4>Insert Rebate Title Lorem Vivamus Nullam</h4>
								<h6>Expiring in 3 days</h6>
							</div>
						</div>
					</div>
					<div class="incentive-column">
						<div class="incentive-card">
							<img src="images/Group 2242.png" alt="Avatar"> 
							<div>
								<h4>Insert Rebate Title Lorem Vivamus Nullam</h4>
								<h6>Expiring in 3 days</h6>
							</div>
						</div>
					</div>
					<div class="incentive-column">
						<div class="incentive-card">
							<img src="images/Group 2242.png" alt="Avatar"> 
							<div>
								<h4>Insert Rebate Title Lorem Vivamus Nullam</h4>
								<h6>Expiring in 3 days</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="shops-nearme-cnt">
					<h2>CRM Transactions</h1>
					<p><a style="text-decoration: none;" href="crm_transaction.php?login=<?php echo $sid;?>"><font color="green">View All ></font></a></p>
				</div>	
				<div class="transaction-row">
				    
				    
				    
				    
				    					<tbody>
					    
					    	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select * from  sales_crm where user_id='$com' order by id desc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
$cat=$row['prod_categ'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['added_by'];

$querycate2=mysqli_query($con,"select * from  user  where id='$cat2' ")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);


$cat2a=$row['store'];

$querycate2a=mysqli_query($con,"select * from  user  where id='$cat2a' ")or die(mysqli_error());
$rowcateg2a=mysqli_fetch_array($querycate2a);



$cat2a2=$row['user_id'];



$querycate2a2=mysqli_query($con,"select * from  customer  where id='$cat2a2' ")or die(mysqli_error());
$rowcateg2a2=mysqli_fetch_array($querycate2a2);




$inv=$row['invoice'];

$querycateqq=mysqli_query($con,"select sum(qty) as qty from  temp_prod  where invoice='$inv' ")or die(mysqli_error());
$rowcategqq=mysqli_fetch_array($querycateqq);


				  ?>  
					    
					    
					    
					    
					  
				    
				    
				    <a href="receipt_view2.php?id=<?php echo $row['id'];?>&login=<?php echo $_GET['login'];?>&cus=<?php echo $row['user_id'];?>&invoice=<?php echo $row['invoice'];?>"   >
				    
					<div class="transaction-column">
						<div class="transaction-card">
							<div class="transaction-card-first">
								<h6>Order# <?php echo $row['invoice'];?></h6>
								<h5><?php 	if($row['status']=="Paid"){
										
										
										echo "Completed";
										
										}else{
										    
										    	echo $row['status'];
										}
										
										?></h5>
							</div>
							<hr>
							<div class="transaction-card-second">
								<h6><i style="font-family: FontAwesome; font-style: normal">&#xf041;</i><?php echo $rowcateg2a['business_name']?></h6>
								<h6>₱  <?php echo number_format($row['total'],2)?></h6>
							</div>
							<div class="transaction-card-third">
								<h6>Date Ordered: <?php 
				  
				  $date=date_create($row['date_added']);
echo date_format($date,"M d, Y H:ia");
				  
		?></h6>
								<h6><?php echo $rowcategqq['qty'];?> items</h6>
							</div>
						</div>
					</div>
					
					</a>
					
											<?php
						
}
						?>
				
					
					
					
					
					
					

				</div>
				<br><br><br><br>
			</div>





			<!-- <div class="shops-nearme-cnt">
				<h2>Shops Near Me</h1>
				<p>Explore More ></p>
			</div>
			<div class="container" style="width: 100%;">
				<div class="row">
					<div class="card">
						<img src="https://picsum.photos/300/200" alt="Avatar" style="width:100%">
						<div class="container">
							<h4><b>Insert Store Name Here</b></h4>
							<form class="rating">
								<label>
									<input type="radio" name="stars" value="5" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span>4.9</span>
								</label>
							</form>
							<i class="fa-location-minus"></i>
							<h6><i class="fa fa-user"></i>Juan Dela Cruz</h6>
							<h6><i style="font-family: FontAwesome; font-style: normal">&#xf041;</i>Juan Dela Cruz</h6>
						</div>
					</div>
				</div>
			</div>		 -->
			<!-- <div class="shops-nearme-cnt">
				<h2>Incentives</h1>
				<p>View All ></p>
			</div>	
			<div class="incentive-row">
				<div class="incentive-column">
					<div class="incentive-card">

					</div>
				</div>
				<div class="incentive-column">
					<div class="incentive-card">

					</div>
				</div>
			</div>
			<div class="shops-nearme-cnt">
				<h2>Transactions</h1>
				<p>View All ></p>
			</div>	

			<div class=transaction-container>
				<div class=transaction-container>

				</div>
				<hr>
				<div class=transaction-container>
					<h6><i class="fa fa-user"></i>Insert Store Name Here</h6>
					<h6>P 300.00</h6>
				</div>
					<div class=transaction-container>
					<h6>Date Ordered: 19-Nov-2021</h6>
					<h6>8 Items</h6>
				</div>
			</div> -->
		</div>
	</body>
</html>