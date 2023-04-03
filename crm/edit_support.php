   <?php
     include('../dist/dbcon.php');

session_start();
date_default_timezone_set("Asia/Manila"); 

if($_GET['login']==""){
    
    
    
}else{
    
        $_SESSION['id']=$_GET['login'];
}



$sid=$_SESSION['id'];
$queryusers=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);



         ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOYALEADSTA POS</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
		
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
			}
			@font-face {
				font-family: "Inter-Regular";
				src: url("./Inter-Regular.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 15.B. POS_Inventory_AddProduct;
				--web-view-id: T_15B_POS_Inventory_AddProduct;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_15B_POS_Inventory_AddProduct;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_15B_POS_Inventory_AddProduct {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(246,255,246,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 15.B. POS_Inventory_AddProduct;
				--web-view-id: T_15B_POS_Inventory_AddProduct;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1846 {
				fill: rgba(255,255,255,1);
			}
			.Rectangle_1846 {
				position: absolute;
				overflow: visible;
				width: 644px;
				height: 923px;
				left: 190px;
				top: 130px;
			}
			#Rectangle_1637_ {
				fill: url(#Rectangle_1637_);
			}
			.Rectangle_1637_ {
				width: 100%;
				height: 100px;
			}
			#Add_New_Product {
				left: 0;
				right: 0;
				top: 33px;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 205px;
				white-space: nowrap;
				line-height: 33px;
				text-align: center;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: bold;
				font-size: 24px;
				color: rgba(255,255,255,1);
			}
			#Group_2090 {
				position: absolute;
				height: 14px;
				left: 82px;
				top: 40px;
				overflow: visible;
			}
			#Path_1144 {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: miter;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Path_1144 {
				overflow: visible;
				position: absolute;
				width: 21.4px;
				height: 2px;
				left: 0px;
				top: 8px;
				transform: matrix(1,0,0,1,0,0);
			}
			#Path_890 {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: round;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Path_890 {
				overflow: visible;
				position: absolute;
				width: 9.414px;
				height: 16.828px;
				left: 0px;
				top: 0px;
				transform: matrix(1,0,0,1,0,0);
			}
			.col-lg,
			.col-lg-auto,
			.col-lg-12,
			.col-lg-11,
			.col-lg-10,
			.col-lg-9,
			.col-lg-8,
			.col-lg-7,
			.col-lg-6,
			.col-lg-5,
			.col-lg-4,
			.col-lg-3,
			.col-lg-2,
			.col-lg-1,
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
			.d-block {
				display: block;
			}
			.text-center {
				text-align: center;
			}
			.mt-p5 {
				margin-top: .5rem;
			}
			.mt-1 {
				margin-top: 1rem;
			}
			.mb-1 {
				margin-bottom: 1rem;
			}
			input[type=text], select, textarea, input[type=number] {
				width: 100%;
				padding: 12px;
				border: 1px solid rgba(211,211,211,1);
				border-radius: 8px;
				resize: vertical;
				background-color: #f8f8f8;
				font-family: "Inter-SemiBold";
				font-size: 15px;
				font-weight: 300;
				text-indent: .5em;
			}
			.product-information-container{
				width: 60%;
				height: auto;
				margin: 1rem auto;
				padding: 3rem;
				border-radius: 8px;
				background-color: white;
				box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
			}
			.enter-product-info-title {
				font-size: 22px;
				font-family: "Inter-SemiBold";
				font-weight: 800;
			}
			.please-fill-up-form-title {
				font-size: 14px;
				font-family: "Inter-SemiBold";
				font-weight: 100;
				color: rgba(155,155,155,1);
			}
			.select2-container {
				width: 100% !important;
			}
			.select2-container--default .select2-selection--single {
				border-radius: 8px !important;
				border: 1px solid rgba(211,211,211,1) !important;
			}
			.select2-container .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__arrow {
				height: 42px !important;
			}
			.select2-container--default .select2-selection--single .select2-selection__rendered {
				line-height: 42px !important;
				text-indent: 10px !important;
				font-family: "Inter-SemiBold";
				font-size: 15px;
				font-weight: 300;
			}
			.select2-container--default .select2-selection--single {
				background-color: #f8f8f8 !important;
			}
			.select2-results__option {
				font-family: "Inter-SemiBold";
				font-size: 15px;
				font-weight: 300;
			}
			.add-product {
				width: 100%;
				height: 56px;
				color: white;
				background-color: rgba(40,155,42,1);
				border-radius: 8px;
				cursor: pointer;
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: 400;
			}
			.cancel {
				width: 100%;
				height: 56px;
				color: rgba(134,138,134,1);
				background-color: rgba(231,231,231,1);
				border-radius: 8px;
				cursor: pointer;
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: 400;
			}
			.product-images-label {
				font-family: "Inter-SemiBold";
				font-size: 15px;
				font-weight: 300;
				color: rgba(155,155,155,1);
			}
			#images .spartan_item_wrapper .file_upload a {
				background-color: rgba(233,233,233,1) !important;
				color: rgba(136,136,136,1) !important;
			}

			@media (min-width: 1024px) {
				.col-lg {
					flex-basis: 0;
					flex-grow: 1;
					max-width: 100%;
				}

				.col-lg-auto {
					flex: 0 0 auto;
					width: auto;
					max-width: 100%;
				}

				.col-lg-1 {
					flex: 0 0 8.3333333333%;
					max-width: 8.3333333333%;
				}

				.col-lg-2 {
					flex: 0 0 16.6666666667%;
					max-width: 16.6666666667%;
				}

				.col-lg-3 {
					flex: 0 0 25%;
					max-width: 25%;
				}

				.col-lg-4 {
					flex: 0 0 33.3333333333%;
					max-width: 33.3333333333%;
				}

				.col-lg-5 {
					flex: 0 0 41.6666666667%;
					max-width: 41.6666666667%;
				}

				.col-lg-6 {
					flex: 0 0 50%;
					max-width: 50%;
				}

				.col-lg-7 {
					flex: 0 0 58.3333333333%;
					max-width: 58.3333333333%;
				}

				.col-lg-8 {
					flex: 0 0 66.6666666667%;
					max-width: 66.6666666667%;
				}

				.col-lg-9 {
					flex: 0 0 75%;
					max-width: 75%;
				}

				.col-lg-10 {
					flex: 0 0 83.3333333333%;
					max-width: 83.3333333333%;
				}

				.col-lg-11 {
					flex: 0 0 91.6666666667%;
					max-width: 91.6666666667%;
				}

				.col-lg-12 {
					flex: 0 0 100%;
					max-width: 100%;
				}
			}

			@media (min-width: 576px) and (max-width: 1023px) {
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
				.product-information-container {
					width: 70% !important;
				}
			}

			/* phones */
			@media (max-width: 575px){
				.product-information-container {
					width: 100% !important;
					margin: 0 auto !important;
					padding: 2rem !important;
				}
				#Group_2090 {
					left: 8%;
				}
				.reverse-order {
					flex-direction: column-reverse;
				}
			}

		</style>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
		<script type="text/javascript" src="./plugins/js/spartan-multi-image-picker-min.js"></script>

	</head>
	<body>
		<div id="T_15B_POS_Inventory_AddProduct">

		<a href="support.php?login=<?php echo $_GET['login'];?>"> 	<svg class="Rectangle_1637_">
				<linearGradient id="Rectangle_1637_" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg></a>
			<div id="Add_New_Product">
				<span>Please send us your concern.</span>
			</div>
			<button id="Group_2090">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</button>









      

					    	<?php

$com=$_GET['login'];
$ticket_no=$_GET['id'];
$query=mysqli_query($con,"select * from  ticket where ticket_no='$ticket_no' order by id asc")or die(mysqli_error());
$row=mysqli_fetch_array($query);


$count++;

				  ?>  
                                        
                      	<div class="product-information-container">

				<div class="row">
					<div class="col-12">
						<span class="enter-product-info-title">Ticket #: <?php echo $row['ticket_no'];?></span>
					</div>
								<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><b><?php echo $row['title'];?></b></span>
						<hr>
					</div>
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><?php echo $row['message'];?></span>
					</div>
							<div class="col-8 mt-p5">	</div>
				<div class="col-4 mt-p5">
						<span class="please-fill-up-form-title">Date Posted: <?php echo $row['date_added'];?></span>
					</div>
				</div>

			</div>                



	<?php

$com=$_GET['login'];
$ticket_no=$_GET['id'];
$query=mysqli_query($con,"select * from  ticket where ticket_rep='$ticket_no' order by id desc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){

$ticket_no22=$row['user_id'];
$ticket_no222=$row['id'];
if($row['type']==''){

$query2=mysqli_query($con,"select * from  user where id='$ticket_no22'")or die(mysqli_error());
}else{
  $query2=mysqli_query($con,"select * from  customer where id='$ticket_no22'")or die(mysqli_error());  
    
    
}
$row2=mysqli_fetch_array($query2);

$count++;

	mysqli_query($con,"update ticket set done='1' where id='$ticket_no222'")or die(mysqli_error());
    
				  ?>  
                                        
                      	<div class="product-information-container">

				<div class="row">
		
								<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><b><font color="green"><?php echo $row2['firstname'];?> <?php echo $row2['lastname'];?> </font></b></span>
						<hr>
					</div>
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><?php echo $row['message'];?></span>
					</div>
							<div class="col-8 mt-p5">	</div>
				<div class="col-4 mt-p5">
						<span class="please-fill-up-form-title">Date Posted: <?php echo $row['date_added'];?></span>
					</div>
				</div>

			</div>                

	<?php
}

				  ?>  


	<?php

if(isset($_POST['signin']))
{
    $com=$_GET['login'];
$prod_image=$_POST['title'];
$message=$_POST['message'];
$ticket_no=$_GET['id'];

$added_on=date("Y-m-d H:i");

		  mysqli_query($con,"INSERT INTO ticket(type,title,message,date_added,user_id,ticket_no,status,ticket_rep) VALUES('customer','$prod_image','$message','$added_on','$com','$ticket_no','Pending','$ticket_no')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='support.php?login='<?php echo $_GET['login'];?>'&id='<?php echo $_GET['id'];?>';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Ticket Successfully Sent!", "success");
 
}
</script>



    
    <?php
    
    
    
 

}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           

			<div class="product-information-container">

				<div class="row">
			
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title">Message</span>
					</div>
					<div class="col-12 mt-1">

						<!-- <form action=""> -->
				                  <form method="POST"  enctype='multipart/form-data'>  
				                  
	
						<div class="mt-p5">
								<textarea type="text" id="name" name="message" placeholder="Message" required></textarea>
							</div>
							<div class="row reverse-order">
							
								<div class="col-12 col-sm-12 col-lg-12 mt-1">
									<button name="signin" type="submit" class="add-product">Reply</button>
								</div>
							</div>
						</form>

					</div>
				</div>

			</div>
		
		</div>

		<script type="text/javascript">

			$(document).ready( function () {

				$(".select2").select2();

				$("#images").spartanMultiImagePicker({
					fieldName: 'productImages[]',
					maxCount : 10,
					rowHeight :'200px',
					groupClassName :'col-6 col-sm-4 col-lg-3',
					allowedExt:'png|jpg|jpeg',
					onExtensionErr : function(index, file){
						console.log(index, file,  'extension err');
						// alert('Please only input png or jpg type file')
					},
					onSizeErr : function(index, file){
						console.log(index, file,  'file size too big');
						// alert('File size too big');
					}
				});


			} );

		</script>

	</body>
</html>