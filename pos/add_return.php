<?php
include('head.php');
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
				--web-view-name: [T] Products_to_Adjust;
				--web-view-id: T_Products_to_Adjust;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_Products_to_Adjust;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_Products_to_Adjust {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(246,255,246,1);
				overflow-y: scroll;
				overflow-x: hidden;
				--web-view-name: [T] Transfers_AddTransfer;
				--web-view-id: T_Products_to_Adjust;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1637_ {
				fill: url(#Rectangle_1637_);
			}
			.Rectangle_1637_ {
				width: 100%;
				height: 100px;
			}
			#Select_Products_to_Adjust {
				left: 0;
				right: 0;
				top: 33px;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 321px;
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
				height: 16.829px;
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
			.w-100 {
				width: 100%;
			}
			.h-100 {
				height: 100% !important;
			}
			.wrapper {
				height: 100%;
				display: flex;
				align-items: center;
			}
			.mt-p5 {
				margin-top: .5rem;
			}
			.mt-1 {
				margin-top: 1rem;
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
			.pr-0 {
				padding-right: 0;
			}
			.pl-0 {
				padding-left: 0;
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
			.mobile-view {
				display: none;
			}
			.big-screen-view {
				display: block;
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
			.products_adjust_container {
				padding: 1rem 10rem;
			}
			.header_product_return_container {
				width:100%;
				height: 45px;
				border-top-left-radius: 8px;
				border-top-right-radius: 8px;
				font-size: 15px;
				font-family: "Inter-SemiBold";
				color: rgba(134,138,134,1);
				background-color: rgba(231,231,231,1);
				margin: 0 auto;
			}
			.header_product_return_container span {
				padding: 10px 20px;
			}
			.body_product_return_container {
				width: 100%;
				height: auto;
				font-size: 15px;
				font-family: "Inter-SemiBold";
				background-color: white;
				margin: 0 auto;
				box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
			}
			.per_product_return_container {
				padding: 1rem 1rem;
				border-bottom: 1px solid rgba(231,231,231,1);
			}
			.removeBtn {
				width: 100%;
				color: rgba(134,138,134,1);
				background-color: unset;
			}
			.add-row {
				width: 40%;
				height: 56px;
				color: rgba(40,155,42,1);
				background-color: unset;
				border-radius: 8px;
				border: 1px solid rgba(40,155,42,1);
				cursor: pointer;
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: 400;
			}
			.request-adjustment {
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

			/* big screen size */
			@media (min-width: 1024px) {
				.pr-lg-0  {
					padding-right: 0 !important;
				}
			}

			/* tablet */
			@media (min-width: 760px) and (max-width: 1023px) {
				#Group_2090 {
					left: 7% !important;
				}
				.products_adjust_container {
					padding: 1rem 3rem !important;
				}
				input[type=text], select, textarea, input[type=number] {
					font-size: 13px !important;
				}
				.request-adjustment, .cancel, .add-row {
					font-size: 16px !important;
				}
				.pr-sm-0  {
					padding-right: 0 !important;
				}
				.pl-sm-p25 {
					padding-left: .25rem !important;
				} 
			}

			/* phones */
			@media (max-width: 575px){
				.big-screen-view {
					display: none;
				}
				.mobile-view {
					display: block;
				}
				#Select_Products_to_Adjust {
					width: 225px !important;
					top: 14px !important;
				}
				#Group_2090 {
					left: 5%;
				}
				.products_adjust_container {
					padding: 1rem 1rem !important;
				}
				.add-row {
					width: 100% !important;
				}
				.cancel, .request-adjustment, #remarks {
					margin-top: 1rem;
				}
				.reverse-order {
					flex-direction: column-reverse;
				}
				.mt-xs-1 {
					margin-top: 1rem !important;
				}
				.header_product_return_container {
					display: none !important;
				}
				.body_product_return_container {
					background-color: unset !important;
					box-shadow: unset !important;
				}
				.per_product_return_container {
					margin-bottom: 1rem !important;
					background-color: white !important;
					box-shadow: 0 10px 30px rgb(0 0 0 / 10%) !important;
				}
			}

		</style>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

	</head>
	<body>

		<div id="T_Products_to_Adjust">

			<svg class="Rectangle_1637_">
				<linearGradient id="Rectangle_1637_" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Select_Products_to_Adjust">
				<span>Add Returns</span>
			</div>
			<a  href="return.php?login=<?php echo $_GET['login'];?>" id="Group_2090">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</a>

 
              	<?php

if(isset($_POST['signin']))
{
    
    

               $com=$_GET['login'];           
	$query21a1=mysqli_query($con,"select * from  returns where store_id='$com'")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
                      
             
       if($row21a1a<=0){   
                       $number = 1; 
       }else{
           
            $number = $row21a1a+1; 
       }

  $s = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 3);
  
$number = "ADJ-".sprintf('%03d',$number);
                      
                      
                      

for ($i=0; $i<count($_POST['name']); $i++){
$prod_id=$_POST['name'][$i];
$sales_agent=$_POST['sales_agent'];
$remarks=$_POST['remarks'][$i];
$quantity=$_POST['quantity'][$i];
$action=$_POST['action'][$i];
$reason=$_POST['reason'][$i];

$ses=$_GET['login'];

                      
              

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;
$date=date("Y-m-d H:i");

 mysqli_query($con,"INSERT INTO returns(store_id,prod_id,type,qty,remarks,sales_agent,reason,code,date_added,status) VALUES('$ses','$prod_id','$action','$quantity','$remarks','$sales_agent','$reason','$number','$date','Pending')")or die(mysqli_error($con));
		  
	



}
    
	  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
       window.location.href='returns.php?login='<?php echo $_GET['login'];?>;
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", " Successfully Requested!", "success");
 
}
</script>


    
    <?php
    

    
}
    




?>           
        










      <form method="POST"  enctype='multipart/form-data'>  

			<div class="products_adjust_container">

				<div class="row mb-2">

					<div class="col-12 col-sm-4 col-lg-4">
						<select id="salesAgent" class="select2" name="sales_agent" required>
							<option value="" disabled selected hidden>Sales Agents</option>
							
												    	<?php

$com=$_GET['login'];
$reg=$rowuser['region'];

echo $reg;
$query=mysqli_query($con,"select * from  user where type='1' and region='$reg' order by firstname asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  
    ?>
							
							
							<option value='<?php echo $row['id'];?>'><?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></option>
						<?php
}
						
						?>
						</select>
					</div>
					<div class="col-12 col-sm-8 col-lg-8">
						<input type="text" id="remarks" name="remarks" placeholder="Remarks" required>
					</div>

				</div>

				<div class="header_product_return_container">
					<div class="row h-100">
						<div class="col-3">
							<div class="wrapper">
								<span>Name</span>
							</div>
						</div>
						<div class="col-2">
							<div class="wrapper">
								<span>Quantity</span>
							</div>
						</div>
					
						<div class="col-4">
							<div class="wrapper">
								<span>Reason</span>
							</div>
						</div>
						<div class="col-1">
							<span></span>
						</div>
					</div>
				</div>
				<div id="body_product_return_container" class="body_product_return_container">

				</div>

				<div class="row mt-3 ">

					<div class="col-12 col-sm-6 col-lg-6">
						<button type="button" onclick="new_row()" class="add-row"> <i class="fa fa-plus"></i> Add Row</button>
					</div>
					<div class="col-12 col-sm-6 col-lg-6">

						<div class="row reverse-order">
							<div class="col-12 col-sm-4 col-lg-4">
								<button  OnClick="dashboard.php?login=<?php echo $_GET['login'];?>" type="button" class="cancel">Cancel</button>
							</div>
							<div class="col-12 col-sm-8 col-lg-8">
								<button type="submit" name="signin" class="request-adjustment">Add Returns</button>
							</div>
						</div>

					</div>
					

				</div>

			</div>
			
			
			
			
			</form>

		</div>

		<script type="text/javascript">

			$(document).ready( function () {
				$(".select2").select2();
			} );

			var ct = 1;
			function new_row() {

				ct++;
				var div1 = document.createElement('div');
				div1.id = ct;
				var delLink ='<div class="per_product_return_container" id="'+ct+'"><div class="row"><div class="col-10 col-sm-3 col-lg-3 mt-xs-1 pr-sm-0"><select id="name'+ct+'" class="select2" name="name[]" required><option value="" disabled selected hidden>Choose Product</option><?php $query=mysqli_query($con,"select * from  products where company=0")or die(mysqli_error()); while($row=mysqli_fetch_array($query)){  ?><option value="<?php echo $row['id'];?>"><?php echo $row['prod_no'];?>|<?php echo $row['prod_name'];?></option><?php } ?></select></div><div class="col-2 col-sm-1 col-lg-1 mt-xs-1 mobile-view"><div class="wrapper text-center"><a class="removeBtn" href="javascript:delIt('+ ct +')"><i class="fa fa-trash-alt"></i></a></div></div><div class="col-12 col-sm-2 col-lg-2 mt-xs-1 pr-sm-0"><input type="text" id="quantity'+ct+'" name="quantity[]" placeholder="Quantity"></div><div class="col-12 col-sm-6 col-lg-6 pr-sm-0 pr-lg-0 mt-xs-1"><input type="text" id="reason'+ct+'" name="reason[]" placeholder="Type your reason here"></div><div class="col-1 pl-sm-p25 pr-sm-0 pr-lg-0 big-screen-view"><div class="wrapper text-center"><a class="removeBtn" href="javascript:delIt('+ ct +')"><i class="fa fa-trash-alt"></i></a></div></div></div></div>'
				div1.innerHTML = delLink;
				document.getElementById('body_product_return_container').appendChild(div1);
				$(".select2").select2();

			}

			function delIt(eleId) {

				d = document;
				var ele = d.getElementById(eleId);
				var parentEle = d.getElementById('body_product_return_container');
				parentEle.removeChild(ele);

			}

		</script>

	</body>
</html>