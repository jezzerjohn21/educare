



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOYALEADSTA POS</title>
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 06.A. POS_EnterPassword - rev1;
				--web-view-id: T_06A_POS_EnterPassword_-_rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_06A_POS_EnterPassword_-_rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
				font-family: "Inter-SemiBold" !important;
			}
			#T_06A_POS_EnterPassword_-_rev1 {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(246,255,246,1);
				overflow-y: scroll;
				overflow-x: hidden;
				--web-view-name: [T] 06.A. POS_EnterPassword - rev1;
				--web-view-id: T_06A_POS_EnterPassword_-_rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Create_Password {
				width: 100%;
				white-space: nowrap;
				text-align: left;
				font-style: normal;
				font-weight: bold;
				font-size: 34px;
				color: rgba(34,34,34,1);
			}
			#Congratulations_Weve_approved_ {
				width: 100%;
				white-space: nowrap;
				line-height: 20px;
				margin-top: 1rem;
				text-align: left;
				font-style: normal;
				font-weight: lighter;
				font-size: 13px;
				color: rgba(136,136,136,1);
			}
			#Create_Account {
				width: 100%;
				white-space: nowrap;
				line-height: 40px;
				text-align: center;
				font-style: normal;
				font-weight: bold;
				font-size: 17px;
				color: rgba(255,255,255,1);
				background-color: #3e9d3a;
				border-radius: 8px;
				height: 50px;
				cursor: pointer;
			}
			.col-sm,
			.col-sm-auto,
			.col-sm-12,
			.col-sm-11,
			.col-sm-10,
			.col-sm-9,
			.col-sm-8,
			.col-sm-7,
			.col-sm-6,
			.col-sm-5,
			.col-sm-4,
			.col-sm-3,
			.col-sm-2,
			.col-sm-1,
			.col,
			.col-auto,
			.col-12,
			.col-11,
			.col-10,
			.col-9,
			.col-8,
			.col-7,
			.col-6,
			.col-5,
			.col-4,
			.col-3,
			.col-2,
			.col-1 {
				position: relative;
				width: 100%;
				padding-right: 15px;
				padding-left: 15px;
			}
			.row {
				display: flex;
				flex-wrap: wrap;
				margin-right: -15px;
				margin-left: -15px;
			}
			.col-auto {
				flex: 0 0 auto;
				width: auto;
				max-width: 100%;
			}
			.col-1 {
				flex: 0 0 8.3333333333%;
				max-width: 8.3333333333%;
			}
			.col-2 {
				flex: 0 0 16.6666666667%;
				max-width: 16.6666666667%;
			}
			.col-3 {
				flex: 0 0 25%;
				max-width: 25%;
			}
			.col-4 {
				flex: 0 0 33.3333333333%;
				max-width: 33.3333333333%;
			}
			.col-5 {
				flex: 0 0 41.6666666667%;
				max-width: 41.6666666667%;
			}
			.col-6 {
				flex: 0 0 50%;
				max-width: 50%;
			}
			.col-7 {
				flex: 0 0 58.3333333333%;
				max-width: 58.3333333333%;
			}
			.col-8 {
				flex: 0 0 66.6666666667%;
				max-width: 66.6666666667%;
			}
			.col-9 {
				flex: 0 0 75%;
				max-width: 75%;
			}
			.col-10 {
				flex: 0 0 83.3333333333%;
				max-width: 83.3333333333%;
			}
			.col-11 {
				flex: 0 0 91.6666666667%;
				max-width: 91.6666666667%;
			}
			.col-12 {
				flex: 0 0 100%;
				max-width: 100%;
			}
			.mt-point25 {
				margin-top: 0.25rem;
			}
			.mt-point50 {
				margin-top: 0.5rem;
			}
			.mt-point75 {
				margin-top: 0.75rem;
			}
			.mt-1 {
				margin-top: 1rem;
			}
			.mt-2 {
				margin-top: 2rem;
			}
			.mt-3 {
				margin-top: 3rem;
			}
			.mb-1 {
				margin-bottom: 1rem;
			}
			.mb-2 {
				margin-bottom: 2rem;
			}
			.mb-3 {
				margin-bottom: 3rem;
			}
			.ml-2 {
				margin-left: 2rem;
			}
			.mr-2 {
				margin-right: 2rem;
			}
			input[type=text], select, textarea, input[type=password], input[type=date] {
				width: 100%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 8px;
				resize: vertical;
				height: 50px;
			}
			.container {
				display: table;
				width: 100%;
				height: 100%;
				padding: 5rem;
			}
			.form_holder {
				display: table-cell;
				text-align: center;
				vertical-align: middle;
			}

			@media (min-width: 576px) {
				.col-sm {
					flex-basis: 0;
					flex-grow: 1;
					max-width: 100%;
				}

				.col-sm-auto {
					flex: 0 0 auto;
					width: auto;
					max-width: 100%;
				}

				.col-sm-1 {
					flex: 0 0 8.3333333333%;
					max-width: 8.3333333333%;
				}

				.col-sm-2 {
					flex: 0 0 16.6666666667%;
					max-width: 16.6666666667%;
				}

				.col-sm-3 {
					flex: 0 0 25%;
					max-width: 25%;
				}

				.col-sm-4 {
					flex: 0 0 33.3333333333%;
					max-width: 33.3333333333%;
				}

				.col-sm-5 {
					flex: 0 0 41.6666666667%;
					max-width: 41.6666666667%;
				}

				.col-sm-6 {
					flex: 0 0 50%;
					max-width: 50%;
				}

				.col-sm-7 {
					flex: 0 0 58.3333333333%;
					max-width: 58.3333333333%;
				}

				.col-sm-8 {
					flex: 0 0 66.6666666667%;
					max-width: 66.6666666667%;
				}

				.col-sm-9 {
					flex: 0 0 75%;
					max-width: 75%;
				}

				.col-sm-10 {
					flex: 0 0 83.3333333333%;
					max-width: 83.3333333333%;
				}

				.col-sm-11 {
					flex: 0 0 91.6666666667%;
					max-width: 91.6666666667%;
				}

				.col-sm-12 {
					flex: 0 0 100%;
					max-width: 100%;
				}
			}

			/* tablet */
			@media (min-width: 760px) and (max-width: 1023px) {
				.container {
					padding: 2rem;
				}
			}

			/* phones */
			@media (max-width: 575px){
				.container {
					padding: 0;
				}
				#Create_Password, #Congratulations_Weve_approved_ {
					width: 80%;
					margin: 0 auto;
					margin-top: 1rem;
					margin-bottom: 1rem;
				}
			}

		</style>
	</head>
	
	
	
	
	
	
	
	

	
		<?php
         include('../dist/dbcon.php');
  $business_name=$_GET['business_name'];
  $_SESSION['id']=$_GET['login'];
$id=$_SESSION['id'];

$query1=mysqli_query($con,"select * from  user where id='$id'")or die(mysqli_error());
$row1=mysqli_fetch_array($query1);

  
if(isset($_POST['signup']))
{

$password=$_POST['password'];

$contact=$_POST['contact'];
$email=$_POST['email'];

$cpassword=$_POST['cpassword'];



if($password==$cpassword){

	mysqli_query($con,"update user set password='$password' where email='$email' and contact='$contact'")or die(mysqli_error());
    
$dd=$_GET['id'];
		    
		    	echo "<script type='text/javascript'>alert('Password Changed!');</script>";
					  echo "<script>document.location='dashboard.php?login=$id'</script>";
		    
}else{
    
    
		    
		    	echo "<script type='text/javascript'>alert('Password Does Not Match!');</script>";
					  echo "<script>document.location='enternew.php?login=$id'</script>";
		    
    
}
		  
		  


}	 




		
?>
	<body>
		<div id="T_06A_POS_EnterPassword_-_rev1">
			<div class="container">
				<div class="form_holder">
					<div class="row">
						<div class="col-12 col-sm-6">
							<div id="Create_Password">
								<span>Create Password</span>
							</div>
							<div id="Congratulations_Weve_approved_">
								<span>Congratulations! We've approved your registration.<br> Please create a password for your account.</span>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<!-- <form action=""> -->
							<form method="POST">
								<div class="mt-1">
									<input type="text" id="emailAddress" name="email" value="<?php echo $row1['email'];?>" placeholder="Email Address" readonly>
								</div>
								<div class="mt-1">
									<input type="text" id="contactNumber" name="contact"  value="<?php echo $row1['contact'];?>" placeholder="Contact Number" readonly>
								</div>
								<div class="mt-1">
									<input type="password" id="tin" name="password" placeholder="Enter Password">
								</div>
								<div class="mt-1">
									<input type="password" id="vatNo" name="cpassword" placeholder="Confirm Password">
								</div>
								<div class="mt-1">
									<input id="Create_Account" name="signup" type="submit" value="Create Account">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>




	
	
	
	
	
	
	
	
	
	