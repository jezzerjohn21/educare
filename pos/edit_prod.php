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
				src: url("./Inter-SemiBold.ttf");
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

		<a href="product.php?login=<?php echo $_GET['login'];?>"> 	<svg class="Rectangle_1637_">
				<linearGradient id="Rectangle_1637_" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg></a>
			<div id="Add_New_Product">
				<span>Add New Product</span>
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
              
              
              
$sid=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM products WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
$cat=$row['prod_categ'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['prod_sup'];

$querycate2=mysqli_query($con,"select * from  supplier  where id='$cat2' order by name asc")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);
?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];



$prod_image=$_FILES["prod_image"]["name"];



if($prod_image!=""){

$prod_code=$_POST['prod_code'];
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prod_price=$_POST['prod_price'];
$crm_price=$_POST['crm_price'];
$prod_srp=$_POST['prod_srp'];
$prod_categ=$_POST['prod_categ'];
$prod_sup=$_POST['prod_sup'];
$prod_onsale=$_POST['prod_onsale'];
$status=$_POST['status'];

$temp56789 = explode(".", $_FILES["prod_image"]["name"]);
$business_dti ="P".round(microtime(true)) . '.' . end($temp56789);
move_uploaded_file($_FILES["prod_image"]["tmp_name"], "../auth/users/products/" . $business_dti);


	mysqli_query($con,"update products set prod_image='$business_dti',prod_code='$prod_code',prod_name='$prod_name',prod_desc='$prod_desc',prod_price='$prod_price',crm_price='$crm_price',prod_srp='$prod_srp'
,prod_categ='$prod_categ',prod_sup='$prod_sup',prod_onsale='$prod_onsale',prod_status='$status' where id='$id'")or die(mysqli_error());

}	  else{
    
    $prod_code=$_POST['prod_code'];
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prod_price=$_POST['prod_price'];
$prod_srp=$_POST['prod_srp'];
$prod_categ=$_POST['prod_categ'];
$threshold=$_POST['threshold'];
$points=$_POST['points'];
$status=$_POST['status'];

$upon=date("Y-m-d H:i");
$up=$_SESSION['id'];
	mysqli_query($con,"update products set prod_desc='$prod_desc',prod_code='$prod_code',prod_name='$prod_name',prod_price='$prod_price',crm_price='$crm_price',points='$points'
,prod_categ='$prod_categ',threshold='$threshold',prod_status='$status',update_by='$up',update_on='$upon' where id='$id'")or die(mysqli_error());
    
    
}
		  
		  
		  
		  
		  ?>
		  
		  
		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='edit_prod.php?login='<?php echo $_GET['login'];?>;
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Updated!", "success");
 
}
</script>

		  
		  <?php
		  
		  

	
		 


		





}


?>           



    

   <?php
                      
	$query21a1=mysqli_query($con,"select * from  products ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
                      
             
       if($row21a1a<=0){   
                       $number = 1; 
       }else{
           
            $number = $row21a1a+1; 
       }

  
  
$number = sprintf('%06d',$number);
                      
                      
                      ?>
                                        
                                      


			<div class="product-information-container">

				<div class="row">
					<div class="col-12">
						<span class="enter-product-info-title">Enter Product Information</span>
					</div>
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title">Please fill up the form below.</span>
					</div>
					<div class="col-12 mt-1">

						<!-- <form action=""> -->
				                  <form method="POST"  enctype='multipart/form-data'>  
				                  
				                                          <input name="prod_no" value="<?php echo $number;?>" type="hidden" class="form-control" required="">
							<div class="mt-p5">
								<input type="text" id="name" value="<?php echo $row['prod_name'];?>" name="prod_name" placeholder="Name" required>
							</div>
							<div class="mt-1">
								<input type="text" id="sku" name="prod_code" placeholder="SKU" value="<?php echo $row['prod_code'];?>" required>
							</div>
							<div class="mt-1">
								<select id="category" class="select2" name="prod_categ" required>
						                    
                                         <option value="<?php echo $rowcateg['id'];?>"><?php echo $rowcateg['name'];?></option>
                           				<?php

$querycate=mysqli_query($con,"select * from  category  where company='$sid' order by name asc")or die(mysqli_error());
while($rowcateg=mysqli_fetch_array($querycate)){  

				  ?> 
                        <option value='<?php echo $rowcateg['id'];?>'><?php echo $rowcateg['name'];?></option>
                 <?php
}
                 ?>
                        
								</select>
							</div>
							<div class="mt-1">
								<textarea id="description" name="prod_desc" rows="6" placeholder="Description" required><?php echo $row['prod_desc'];?></textarea>
							</div>
							<div class="mt-1">
								<input type="text" value="<?php echo $row['prod_unit'];?>" id="unit" name="prod_unit" placeholder="Unit" required>
							</div>
							<div class="mt-1">
								<input type="text" id="price" name="prod_price" placeholder="POS Price" value="<?php echo $row['prod_price'];?>" required>
							</div>
									<div class="mt-1">
								<input type="text" id="price" name="crm_price" placeholder="CRM Price" value="<?php echo $row['crm_price'];?>" required>
							</div>
							<div class="mt-1">
								<input type="text" id="threshold" name="threshold" value="<?php echo $row['threshold'];?>" placeholder="Threshold" required>
							</div>
							<div class="mt-1">
								<input type="text" value="<?php echo $row['points'];?>" id="points" name="points" placeholder="Points" required>
							</div>
							<div class="mt-1">
								<div class="row">
									<div class="col-12 mb-1">
										<span class="product-images-label">Images</span>
									</div>
									<div class="col-12">
									  <input name="prod_image" type="file" class="form-control" >
									  <br>  <br>  <br>
									</div>
								</div>
							</div>
							<div>
								<select id="status" name="status" required>
							  <option><?php echo $row['prod_status'];?></option>
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
							<div class="row reverse-order">
							
								<div class="col-12 col-sm-12 col-lg-12 mt-1">
									<button name="signin" type="submit" class="add-product">Add Product</button>
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