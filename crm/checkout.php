<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loyaleadsta</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

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
				--web-view-name: [T] 11. CRM_Checkout;
				--web-view-id: T_11_CRM_Checkout;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_11_CRM_Checkout;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_11_CRM_Checkout {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(243,243,243,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 11. CRM_Checkout;
				--web-view-id: T_11_CRM_Checkout;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1637 {
		fill: url(#Rectangle_1637)
			}
			.Rectangle_1637 {
				width: 100%;
				height: 100px;
			}
			#Group_2141 {
				position: absolute;
				height: 14px;
				left: 14%;
				top: 5%;
				overflow: visible;
				z-index: 2;
				cursor: pointer;
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
			#Checkout {
				left: 0;
				right: 0;
				top: 5%;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 115px;
				white-space: nowrap;
				line-height: 33px;
				margin-top: -4.5px;
				text-align: center;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: bold;
				font-size: 24px;
				color: rgba(255,255,255,1);
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
			.mt-p5{
				margin-top: 0.5rem;
			}
			.mt-1 {
				margin-top: 1rem;
			}
			.mt-1p5 {
				margin-top: 1.5rem;
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
			.mb-1p5 {
				margin-bottom: 1.5rem;
			}
			.mb-2 {
				margin-bottom: 2rem;
			}
			.ml-2 {
				margin-left: 2rem;
			}
			.ml-05 {
				margin-left: .5rem;
			}
			.text-center {
				text-align: center !important;
			}
			.text-right {
				text-align: right !important;
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
			.sticky {
				position: sticky;
			}
			.z-index-100 {
				z-index: 100;
			}
			.d-block {
				display: block;
			}
			.bg-white {
				background-color: white !important;
			}
			.gray {
				color: rgba(155,155,155,1);
			}
			.gold {
				color: rgba(224,194,26,1);
			}
			.bold {
				font-weight: bold;
			}
			.mobile-view {
				display: none;
			}
			.big-screen-view {
				display: block;
			}
			.d-table {
				display: table;
			}
			.border-bottom {
				border-bottom: 2px solid rgba(155,155,155,1);
			}
			.chevron-icon {
				font-size: 12px;
			}

			.delivery-address-container {
				padding-left: 12rem;
    			padding-right: 12.5rem;
				background-color: white;
				width: 100%;
				padding-top: 1.5rem;
				padding-bottom: 1.5rem;
			}
			.delivery-address {
				color: rgba(40,155,42,1);
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
			}
			.name-and-phonenumber, .address {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 15px;
			}
			.delivery-address-btn-container {
				float: right;
			}
			.delivery-address-btn {
				background-color: unset;
				color: rgba(155,155,155,1);
				cursor: pointer;
				font-size: 20px;
			}

			.order-per-store-container {
				padding-top: 1.5rem;
				padding-bottom: 1.5rem;
				background-color: white;
				width: 100%;
				margin-top: 1rem;
			}
			.order-details-title-container, .order-details-per-product-container {
				padding-left: 12rem;
    			padding-right: 12.5rem;
			}
			.store-name {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
			}

			#product-image-checkout {
			height: 80px;
				width: 100%;
				border-top-left-radius: 8px;
				border-top-right-radius: 8px;
				object-fit: scale-down;
			}
			.product-name-checkout {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 18px;
			}
			.product-price-checkout {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
				margin-top: .5rem;
			}
			.product-kilotype-checkout {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 14px;
			}
			.product-quantity-checkout {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
				width: 100%;
				text-align: right;
				padding-right: 1rem;
			}

			.order-total-count {
				font-family: "Inter-Regular";
				font-weight: normal;
				font-size: 17px;
			}
			.orders-total-amount {
				font-family: "Inter-Regular";
				font-weight: bold;
				font-size: 17px;
				text-align: right;
			}
			.order-total-container {
				padding-left: 12rem;
    			padding-right: 12.5rem;
				margin: .5rem 0;
			}

			.checkout-btn-container {
				padding-left: 12rem;
    			padding-right: 12.5rem;
				margin-top: 1rem;
				background-color: white;
				width: 100%;
			}
			.grand-total-title {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
			}
			.grand-total-amount {
				font-family: "Inter-Regular";
				font-weight: bold;
				font-size: 20px;
				text-align: right;
				color: rgba(40,155,42,1);
			}
			.proceed-to-checkout {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 20px;
				width: 100%;
				height: 56px;
				color: white;
				background-color: rgba(218,186,0,1);
				cursor: pointer;
				border-radius: 8px;
				margin-top: 1rem;
			}

			.discount-container {
				background-color: white;
				padding-left: 12rem;
    			padding-right: 12.5rem;
				margin-top: 1rem;
				height: 57px;
				width: 100%;
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			.rebate-container {
				background-color: white;
				padding-left: 12rem;
    			padding-right: 12.5rem;
				height: 57px;
				width: 100%;
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			.reward-container {
				background-color: white;
				padding-left: 12rem;
    			padding-right: 12.5rem;
				height: 57px;
				width: 100%;
			}
			.select_color {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
				cursor: pointer;
				background: unset;
				text-align: right;
				width: 100%;
			}
			.select_title {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
			}

			.payment-container {
				background-color: white;
				padding-left: 12rem;
    			padding-right: 12.5rem;
				height: 57px;
				width: 100%;
				border-bottom: 2px dotted rgba(211,211,211,1);
			}
			.payment-details-container {
				background-color: white;
				padding: 1.5rem 12.5rem;
				height: auto;
				width: 100%;
			}
			.subtotal-name, .discount-name, .rebate-name, .reward-name {
				text-align: left;
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
			}
			.subtotal-amount {
				text-align: right;
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
			}
			.discount-amount, .rebate-amount, .reward-amount {
				text-align: right;
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
			}
			.total-amount-name {
				text-align: left;
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
			}
			.total-amount {
				text-align: right;
				font-family: "Inter-Regular";
				font-weight: bold;
				font-size: 18px;
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
				#Group_2141 {
					left: 7% !important;
					top: 7% !important;
				}
				#Checkout {
					top: 7%;
				}
				.delivery-address-container,
				.order-details-title-container, .order-details-per-product-container, .order-total-container,
				.discount-container, .rebate-container, .reward-container, .payment-container, .payment-details-container,
				.checkout-btn-container {
					padding-left: 4rem !important;
    				padding-right: 4.5rem !important;
				}
				.name-and-phonenumber, .address {
					font-size: 14px !important;
				}
				.delivery-address, .store-name, .product-quantity-checkout, .select_title, .select_color, .select_title,
				.subtotal-name, .discount-name, .rebate-name, .reward-name,
				.subtotal-amount, .discount-amount, .rebate-amount, .reward-amount, .total-amount-name,
				.grand-total-title {
					font-size: 15px !important;
				}
				.product-name-checkout {
					margin-left: .75rem !important;
					font-size: 17px !important;
				}
				.product-price-checkout {
					margin-left: .75rem !important;
					font-size: 15px !important;
				}
				.product-kilotype-checkout {
					font-size: 13px !important;
				}
				.order-total-count, .orders-total-amount {
					font-size: 16px !important;
				}
				.total-amount {
					font-size: 17px !important;
				}
				.grand-total-amount, .proceed-to-checkout {
					font-size: 19px !important;
				}
			}
			
			/* phones */
			@media (max-width: 575px){
				.mobile-view {
					display: block;
				}
				.big-screen-view {
					display: none;
				}
				#Group_2141 {
					left: 6% !important;
				}
				.delivery-address-container,
				.order-details-title-container, .order-details-per-product-container, .order-total-container,
				.discount-container, .rebate-container, .reward-container, .payment-container, .payment-details-container,
				.checkout-btn-container {
					padding-left: 2rem !important;
					padding-right: 2rem !important;
				}
				.delivery-address, .store-name, .product-quantity-checkout, .select_title, .select_color, .select_title,
				.subtotal-name, .discount-name, .rebate-name, .reward-name,
				.subtotal-amount, .discount-amount, .rebate-amount, .reward-amount, .total-amount-name,
				.grand-total-title, .product-price-checkout {
					font-size: 14px !important;
				}
				.name-and-phonenumber, .address {
					font-size: 13px !important;
				}
				.delivery-address-btn {
					font-size: 18px !important;
				}
				.product-name-checkout, .total-amount {
					font-size: 16px !important;
				}
				.order-total-count, .orders-total-amount {
					font-size: 15px !important;
				}
				.grand-total-amount, .proceed-to-checkout {
					font-size: 18px !important;
				}
				#product-image-checkout {
					width: 50px;
    				height: 50px;
				}
				
			}

		</style>

	</head>
	<body>

		<div id="T_11_CRM_Checkout">
		    			<svg class="Rectangle_1637">
				<linearGradient id="Rectangle_1637" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<a href="cart.php?login=<?php echo $_GET['login'];?>&store=<?php echo $_GET['store'];?>" id="Group_2141">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</a>
			<div id="Checkout">
				<span>Checkout</span>
			</div>
			
			
				<?php
							         include('../dist/dbcon.php');
						$user_id2=$_GET['store'];
						$user_id=$_GET['login'];
	$querycate2s=mysqli_query($con,"select * from  temp_prod  where user_id='$user_id' and status='Pending' and store='$user_id2' ")or die(mysqli_error());
$rowcateg2s=mysqli_num_rows($querycate2s);
					
					?>	
				


<?php
      include('../dist/dbcon.php');
      $ii=$_GET['login'];
$query=mysqli_query($con,"SELECT * FROM customer WHERE id='$ii' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
	    
	    $iir=$row['region'];
	    
$query2=mysqli_query($con,"SELECT * FROM refregion WHERE id='$iir' ")or die(mysqli_error($con));
	$row2=mysqli_fetch_array($query2);
	
	    $iirb=$row['barangay'];
	    
$query2b=mysqli_query($con,"SELECT * FROM refbrgy WHERE brgyCode='$iirb' ")or die(mysqli_error($con));
	$row2b=mysqli_fetch_array($query2b);
	
	
	
		    $iirbs=$row['city'];
	    
$query2bs=mysqli_query($con,"SELECT * FROM refcitymun WHERE citymunCode='$iirbs' ")or die(mysqli_error($con));
	$row2bs=mysqli_fetch_array($query2bs);
	
	
	
	    $iirbs=$row['city'];
	    
$query2bs2=mysqli_query($con,"SELECT * FROM refprovince WHERE provCode='$iirbs' ")or die(mysqli_error($con));
	$row2bs2=mysqli_fetch_array($query2bs2);
	
?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="row" style="margin-top: -4px;">

				<div class="delivery-address-container">

					<div class="row">

						<div class="col-9 col-sm-8 col-lg-6">

							<span class="delivery-address d-block"> <i class="fa fa-map-marker-alt"></i> &nbsp; Delivery Address</span>
							<span class="name-and-phonenumber mt-1 d-block"> <?php echo $row['firstname'];?> <?php echo $row['lastname'];?>, <?php echo $row['contact_no'];?></span>
							<span class="address mt-1 d-block"> <?php echo $row['address'];?> <?php echo $row2b['brgyDesc'];?>, <?php echo $row2bs['citymunDesc'];?>, <?php echo $row2bs2['provDesc'];?></span>

						</div>

						<div class="col-3 col-sm-4 col-lg-6">

							<div class="delivery-address-btn-container wrapper">
								<button type="button" class="delivery-address-btn">
									<i class="fa fa-chevron-right gray"></i>
								</button>
							</div>

						</div>

					</div>


				</div>





<?php
      include('../dist/dbcon.php');
       $total3=0;
       $com2=$_GET['store'];
      	$querycate2splace=mysqli_query($con,"select distinct store from  temp_prod  where user_id='$user_id' and status='Pending' and store='$com2'  order by store asc ")or die(mysqli_error());
      	while($rowplace=mysqli_fetch_array($querycate2splace)){
      	
      	
      	
      $ii=$rowplace['store'];
$query=mysqli_query($con,"SELECT * FROM user WHERE id='$ii' order by business_name asc")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
	    
	    
	    

	

?>










				<div class="order-per-store-container">

					<div class="row order-details-title-container">

						<div class="col-12">
							<span class="store-name d-block"> <i class="fa fa-store gray"></i> &nbsp;<?php echo $row['business_name'];?>&nbsp;<i class="fa fa-chevron-right chevron-icon gray"></i></span>
						</div>

						<div class="col-12 mt-1 mb-1pb big-screen-view">
							<span class="d-block border-bottom"></span>
						</div>

					</div>

					<div class="row mt-1 mobile-view">
						<div class="col-12">
							<span class="d-block border-bottom"></span>
						</div>
					</div>
					
					
					
					<?php

$com=$_GET['login'];
$com2=$_GET['store'];
$total=0;
$query=mysqli_query($con,"select * from  temp_prod where store='$ii' and user_id='$com' and status='Pending' order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;

$cat=$row['prod_id'];

$querycate2as=mysqli_query($con,"select * from  products  where id='$cat' ")or die(mysqli_error());
$rowcateg2as=mysqli_fetch_array($querycate2as);


$total=$total+$row['total'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['added_by'];

$querycate2=mysqli_query($con,"select * from  user  where id='$cat2' ")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);


$cat2a=$row['update_by'];

$querycate2a=mysqli_query($con,"select * from  user  where id='$cat2a' ")or die(mysqli_error());
$rowcateg2a=mysqli_fetch_array($querycate2a);
				  ?>  	
					
					
					
					
					
					
					
					

					<div class="row order-details-per-product-container mt-1">

						<div class="col-2 col-sm-1 col-lg-1">
				    
						    			  <?php
											  if($rowcateg2as['prod_image']!=""){
											  ?>
											 
										    
							<img id="product-image-checkout"  src="../auth/users/products/<?php echo $rowcateg2as['prod_image'];?>" srcset="../auth/users/products/<?php echo $rowcateg2as['prod_image'];?>">
											    <?php
											  }else{
											  ?>
											    
							<img id="product-image-checkout"  src="../auth/users/products/<?php echo $rowcateg2as['prod_image'];?>" srcset="../auth/users/products/noim.jpg">
											     <?php
											  }
											  ?>
						</div>

						<div class="col-8 col-sm-10 col-lg-10">
							<span class="d-block product-name-checkout"><?php echo $rowcateg2as['prod_name'];?></span>
							<span class="d-block product-price-checkout">₱ <?php echo number_format($rowcateg2as['prod_price'],2);?> <span class="product-kilotype-checkout">/<?php echo $rowcateg2as['prod_unit'];?></span></span>
						</div>

						<div class="col-2 col-sm-1 col-lg-1">
							<div class="wrapper">
								<span class="product-quantity-checkout">x<?php echo $row['qty'];?></span>
							</div>
						</div>

					</div>

	<?php
}
$total3=$total3+$total;
}
				  ?>  












					<div class="order-total-container">
						<div class="row">
							<div class="col-6">
								<span class="order-total-count mt-1 d-block"> Order Total (<?php echo $count;?> items)</span>
							</div>
							<div class="col-6">
								<span class="orders-total-amount mt-1 d-block"> ₱ <?php echo number_format($total3,2);?></span>
							</div>
						</div>
					</div>

				</div>

	

				<div class="discount-container">

					<div class="row h-100">

						<div class="col-sm-6 col-6">
							<div class="wrapper">
								<img src="./tag.svg" width="24" height="24"/>
								<span class="ml-05 select_title">Discount</span>
							</div>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<div class="wrapper">
								<button type="button" class="select_color discount-btn">Select Discount &nbsp;<i class="fa fa-chevron-right gray"></i></button>
							</div>
						</div>

					</div>

				</div>

				<div class="rebate-container">

					<div class="row h-100">

						<div class="col-sm-6 col-6">
							<div class="wrapper">
								<img src="./Rebate.svg" width="24" height="24"/>
								<span class="ml-05 select_title">Rebate</span>
							</div>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<div class="wrapper">
								<button type="button" class="select_color rebate-btn">Select Rebate &nbsp;<i class="fa fa-chevron-right gray"></i></button>
							</div>
						</div>

					</div>

				</div>

				<div class="reward-container">

					<div class="row h-100">

						<div class="col-sm-6 col-6">
							<div class="wrapper">
								<img src="./gift.svg" width="24" height="24"/>
								<span class="ml-05 select_title">Reward</span>
							</div>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<div class="wrapper">
								<button type="button" class="select_color reward-btn">Select Reward &nbsp;<i class="fa fa-chevron-right gray"></i></button>
							</div>
						</div>

					</div>

				</div>

				<div class="payment-container mt-1">

					<div class="row h-100">

						<div class="col-sm-6 col-6">
							<div class="wrapper">
								<img src="peso_icon.png" width="24" height="24"/>
								<span class="ml-05 select_title">Payment Option</span>
							</div>
						</div>
					
					<?php
					if($_GET['pmode']==""){
					?>
						<div class="col-sm-6 col-6 text-right">
							<div class="wrapper">
								<a href="payment_mode.php?login=<?php echo $_GET['login'];?>&store=<?php echo $_GET['store'];?>&pmode=<?php echo $_GET['pmode'];?>" type="button" class="select_color payment-btn">Select Payment &nbsp;<i class="fa fa-chevron-right gray"></i></a>
							</div>
						</div>
						
								
					<?php
					}else{
					?>
						<div class="col-sm-6 col-6 text-right">
							<div class="wrapper">
								<a href="payment_mode.php?login=<?php echo $_GET['login'];?>&store=<?php echo $_GET['store'];?>&pmode=<?php echo $_GET['pmode'];?>" type="button" class="select_color payment-btn"><?php echo $_GET['pmode'];?>&nbsp;<i class="fa fa-chevron-right gray"></i></a>
							</div>
						</div>
					
							<?php
					}
					?>

					</div>

				</div>

				<div class="payment-details-container">

					<div class="row">

						<div class="col-sm-6 col-6">
							<span class="subtotal-name">Subtotal</span>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<span class="subtotal-amount">₱ <?php echo number_format($total,2);?></span>
						</div>

					</div>

					<div class="row mt-1">

						<div class="col-sm-6 col-6">
							<span class="discount-name">Discount</span>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<span class="discount-amount">--</span>
						</div>

					</div>

					<div class="row mt-1">

						<div class="col-sm-6 col-6">
							<span class="rebate-name">Rebate</span>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<span class="rebate-amount">--</span>
						</div>

					</div>

					<div class="row mt-1">

						<div class="col-sm-6 col-6">
							<span class="reward-name">Reward</span>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<span class="reward-amount">--</span>
						</div>

					</div>

					<div class="row mt-1">

						<div class="col-sm-6 col-6">
							<div class="wrapper">
								<span class="total-amount-name">Total Amount</span>
							</div>
						</div>
						<div class="col-sm-6 col-6 text-right">
							<span class="total-amount">₱ <?php echo number_format($total3,2);?></span>
						</div>

					</div>

				</div>

				<div class="checkout-btn-container">

					<div class="row mt-1">

						<div class="col-6">
							<span class="grand-total-title mt-1 d-block">Total Amount</span>
						</div>

						<div class="col-6">
							<span class="grand-total-amount mt-1 d-block">₱ <?php echo number_format($total3,2);?></span>
						</div>

					</div>

					<div class="row mt-1 mb-2">

						<div class="col-12">
						    
						    	<?php
         include('../dist/dbcon.php');
  $business_name=$_GET['business_name'];
  
  
$queryttw=mysqli_query($con,"select * from  customer where id='$user_id' ")or die(mysqli_error());
$rowuser=mysqli_fetch_array($queryttw); 
$id_numbe2=$rowuser['id_number'];

if(isset($_POST['signin']))
{
    
    


$user_id=$_GET['login'];



$date=date("Y-m-d H:i");




  	$querycate2splace=mysqli_query($con,"select distinct store from  temp_prod  where user_id='$user_id' and status='Pending' and store='$ii' order by store asc ")or die(mysqli_error());
      	while($rowplace=mysqli_fetch_array($querycate2splace)){
$store=$rowplace['store'];
$rand=rand(10000,99999)."".$store;



$payment=$_GET['pmode'];
$querytt=mysqli_query($con,"select sum(total) as total from  temp_prod where store='$store' and user_id='$user_id' and status='Pending' ")or die(mysqli_error());
$rowtt=mysqli_fetch_array($querytt); 

$total2=$rowtt['total'];


		mysqli_query($con,"update pending_points set status='1' where user='$id_numbe2'")or die(mysqli_error());



	mysqli_query($con,"update temp_prod set status='On-processing', invoice='$rand' where user_id='$user_id' and store='$store' and status='Pending'")or die(mysqli_error());
	
		  mysqli_query($con,"INSERT INTO sales_crm(payment,user_id,store,invoice,total,status,date_added) VALUES('$payment','$user_id','$store','$rand','$total2','On-processing','$date')")or die(mysqli_error($con));
	
	
      	}
	
	
	
?>


 <script type="text/javascript">
    window.setTimeout(function() {
       window.location.href='success_checkout.php?login=<?php echo $_GET['login'];?>';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<?php



	     
	     
	     

		  


}	

$rand=rand(10000,99999)."".$store;

?>						
				
				<?php
				if($_GET['pmode']=="Cash on Delivery"){
				?>
				
						    <form method="POST">
							<button type="submit" name="signin" class="proceed-to-checkout">Place Order</button>
						
								
								</form>
				
					    			
				<?php
				}
				?>
					<?php
				if($_GET['pmode']=="Cash on Pickup"){
				?>
				
						    <form method="POST">
							<button type="submit" name="signin" class="proceed-to-checkout">Place Order</button>
						
								
								</form>
				
					    			
				<?php
				}
				?>
				
				
				
				
					<?php
				if($_GET['pmode']=="Payment Center/ e-Wallet"){
				?>
				
							    <form method="POST">
							<center><a href="dragon.php?total=<?php echo $total3;?>&email=<?php echo $rowuser['email'];?>&invoice=<?php echo $rand;?>&pmode=<?php echo $_GET['pmode'];?>&login=<?php echo $_GET['login'];?>&store=<?php echo $_GET['store'];?>&desc=" type="submit" name="signin2" class="proceed-to-checkout"><img width="300px" src="dragon.jpg"></a></center>
						
								
								</form>
				
					    			
				<?php
				}
				?>
					<?php
				if($_GET['pmode']=="Credit / Debit Card"){
				?>
				
						    <form method="POST">
							<center><a href="dragon.php?total=<?php echo $total3;?>&email=<?php echo $rowuser['email'];?>&invoice=<?php echo $rand;?>&pmode=<?php echo $_GET['pmode'];?>&login=<?php echo $_GET['login'];?>&store=<?php echo $_GET['store'];?>&desc=" type="submit" name="signin2" class="proceed-to-checkout"><img width="300px" src="dragon.jpg"></a></center>
						
								
								</form>
				
					    			
				<?php
				}
				?>
				
							
						</div>

					</div>

				</div>

			</div>

		</div>

	</body>
</html>