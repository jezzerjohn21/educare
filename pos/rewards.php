
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("./Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 09.D. POS_Billing_Discounts-rev1;
				--web-view-id: T_09D_POS_Billing_Discounts-rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_09D_POS_Billing_Discounts-rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_09D_POS_Billing_Discounts-rev1 {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(248,248,248,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 09.D. POS_Billing_Discounts-rev1;
				--web-view-id: T_09D_POS_Billing_Discounts-rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1637_br {
				fill: url(#Rectangle_1637_br);
			}
			.Rectangle_1637_br {
				width: 100%;
				height: 100px;
			}
			#Select_Discount {
				left: 0;
				right: 0;
				top: 5%;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 187px;
				white-space: nowrap;
				line-height: 33px;
				text-align: center;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: bold;
				font-size: 24px;
				color: rgba(255,255,255,1);
			}
			#Group_2141 {
				position: absolute;
				height: 14px;
				left: 5%;
				top: 5.8%;
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
			.ml-2 {
				margin-left: 2rem;
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
			.bold {
				font-weight: bold;
			}
			.mobile-view {
				display: none;
			}
			.big-screen-view {
				display: block;
			}
			input[type=text], input[type=number] {
				width: 100%;
				border: 1px solid rgba(155,155,155,1);
				border-radius: 8px;
				resize: vertical;
				height: 56px;
				text-indent: 1rem;
				font-size: 16px;
				font-family: "Inter-SemiBold";
				color: rgba(155,155,155,1);
			}
			.form-container {
				width: 100%;
				display: block;
				padding: 0 1.5rem;
			}
			.search-container {
				width: 80%;
				display: block;
				margin: 0 auto;
				margin-top: 1rem;
			}
			.search-container i {
				position: absolute;
				left: 80%;
    			top: 23px;
			}
			.icon {
				padding: 10px;
				min-width: 40px;
			}
			#search {
				background-color: #f8f8f8;
			}
			.discount-container {
				width: 80%;
				height: 600px;
				display: block;
				margin: 0 auto;
				overflow-y: auto;
				overflow-x: hidden;
				margin-top: 1rem !important;

			}
			.single-discount-container {
				margin-top: 0.75rem !important;
				border: 2px solid #d3d3d369;
				border-radius: 8px;
				height: auto;
				width: 100%;
				background-color: white;
			}
			#discount-image {
				width: 80px;
    			height: 100%;
				border-top-left-radius: 8px;
    			border-bottom-left-radius: 8px;
			}
			#discount-name {
				width: fit-content;
				margin-top: 1rem;
				margin-left: 15px;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: rgba(34,34,34,1);
				letter-spacing: -0.2px;
			}
			#expiration {
				width: fit-content;
				margin-top: 3px;
				margin-left: 15px;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 14px;
				color: rgba(136,136,136,1);
			}
			.checkbox-container {
				height: 25px;
				width: 25px;
				border-radius: 8px;
				text-align: center;
				margin-top: .75rem;
			}

			input[type="checkbox"] {
				visibility: hidden;
			}
			input[type="checkbox"] + label:before {
				border: 1px solid #333;
				content: "\00a0";
				display: inline-block;
				font: 1.25em  "Inter-SemiBold";
				height: 25px;
    			width: 25px;
				margin: 0 .25em 0 0;
				padding: 0;
				vertical-align: top;
			}
			input[type="checkbox"]:checked + label:before {
				background: rgba(0,133,63,1);
				color: white;
				content: "\2713";
				text-align: center;
			}

			.select-discounts-container {
				padding-left: 2.5rem;
				padding-right: 3rem;
				height: auto;
				border-bottom: 1px solid rgba(136,136,136,1);
			}
			.selected-discounts {
				font-family: "Inter-SemiBold";
				font-size: 20px;
			}
			.selected-discounts {
				display: block;
				width: 100%;
				font-family: "Inter-SemiBold";
				font-weight: bold;
				font-size: 25px;
			}
			.voucher-selected {
				display: block;
				width: 100%;
				font-family: "Inter-SemiBold";
				font-size: 16px;
				margin-top: 0.75rem;
			}
			.number-vouch {
				color: rgba(218,186,0,1);
			}

			.selected-discounts-container {
				width: 100%;
				height: 500px;
				overflow-y: auto;
				overflow-x: hidden;
				/* border-bottom: 1px solid rgba(136,136,136,1); */
			}
			.apply-button-container {
				padding-left: 2.5rem;
				padding-right: 3rem;
			}
			.apply-discount {
				margin-top: 2rem;
				margin-bottom: 2rem;
				background-color: rgba(40,155,42,1);
				color: white;
				width: 100%;
				height: 56px;
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: bold;
				border-radius: 8px;
				cursor: pointer;
			}
			.selected-discount-name {
				width: fit-content;
				margin-top: 1rem;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: rgba(34,34,34,1);
				letter-spacing: -0.2px;
			}
			.selected-expiration {
				width: fit-content;
				margin-top: 3px;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 14px;
				color: rgba(136,136,136,1);
			}

			.per-selected-discounts:first-child {
				margin-top: 3rem;
			}
			.per-selected-discounts {
				margin-top: 1rem;
			}

			.mobile-selected-discounts {
				padding-left: 2.5rem;
				padding-right: 3rem;
				border-top: 1px solid rgba(136,136,136,1);
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
				.search-container, .discount-container {
					width: 100% !important;
				}
				.Rectangle_1637_br {
					height: 90px !important;
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
				.search-container, .discount-container {
					width: 100% !important;
				}
				.Rectangle_1637_br {
					height: 90px !important;
				}
				.pl-0-sm {
					padding-left: 0 !important;
				}
				#discount-name {
					font-size: 14px !important;
				}
				#expiration {
					font-size: 12px !important;
				}
				#discount-image {
					width: 60px !important;
				}
				.apply-discount {
					margin-top: 1rem !important;
					margin-bottom: 5rem !important;
				}
			}

		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body>
		<div id="T_09D_POS_Billing_Discounts-rev1">
			<svg class="Rectangle_1637_br">
				<linearGradient id="Rectangle_1637_br" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_br" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Select_Discount">
				<span>Select Rewards</span>
			</div>
			<button id="Group_2141">
			<a  href="billing.php?login=<?php echo $_GET['login'];?>" id="Group_2090">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</a>
			</button>

			<div class="row" style="margin-top: -4px;">
			
				<div class="col-sm-7 col-12">

					<div class="form-container">

						<div class="search-container">
							<i class="fa fa-search icon"></i>
							<input type="text" id="search" name="search" placeholder="Search Rewards">
						</div>

						<div class="discount-container">

							<!-- id="sdc_{}" -->
							<!-- change the {} with the discount id -->
							
							
							
							
							
													   	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select * from  rewards  order by name asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  
    
    ?>	
							
							
							
							
							
							
							<div class="single-discount-container" id="sdc_1">

								<div class="row">

									<div class="col-2 col-sm-2">
										<img id="discount-image" src="gift_icon.png" alt="billing image">
									</div>

									<div class="col-8 col-sm-8 p-0 mb-1">
										<div id="discount-name">
											<span><?php echo $row['name'];?></span>
										</div>
										<div id="expiration">
											<span>Expiring in 3 days</span>
										</div>
									</div>

									<div class="col-2 col-sm-2 p-0 pl-0-sm">
										<div class="checkbox-container">
											<!-- id="billing_discount_{}" -->
											<!-- value="sdc_{}" -->
											<!-- change the {} with the discount id -->
											<input type="checkbox" id="billing_discount_1" name="discount[]" value="sdc_<?php echo $row['id'];?>" onclick="clicked(<?php echo $row['id'];?>)">
											<label for="billing_discount_<?php echo $row['id'];?>"></label>
										</div>
									</div>

								</div>

							</div>
							
							
							
							
										   	<?php

}
    
    ?>				
							
							


						</div>

					</div>

				</div>

				<div class="col-sm-5 col-12 bg-white sticky z-index-100" style="padding: 0;">
					
					<div class="select-discounts-container big-screen-view">

						<div class="row mt-2">
							<div class="col-12">
								<span class="selected-discounts">Selected Rewards</span>
								<span class="voucher-selected"><span class="number-vouch">2 voucher(s)</span> selected.</span>
							</div>
						</div>

						<div class="selected-discounts-container">

							<div class="per-selected-discounts">

								<div class="row">

									<div class="col-10">
										<span class="selected-discount-name">Rebates or Voucher Title Lorem Vivamus Nullam</span>
									</div>
									<div class="col-2">
										<i class="fa fa-close"></i>
									</div>
									<div class="col-12">
										<span class="selected-expiration">Expiring in 3 days</span>
									</div>
	
								</div>
								
							</div>

							
						</div>

					</div>

					<div class="mobile-view mobile-selected-discounts">
						<div class="row">
							<div class="col-12">
								<span class="voucher-selected"><span class="number-vouch">2 voucher(s)</span> selected.</span>
							</div>
						</div>
					</div>
					<div class="apply-button-container">

						<div class="row">
							<button class="apply-discount">Apply Rewards</button>
						</div>

					</div>

				</div>

			</div>

		</div>

		<script type="text/javascript">

			function clicked(id) {
				if($('#billing_discount_'+id).prop("checked") == true) {
					$('#sdc_'+id).css("border","2px solid rgba(0,133,63,1)");
				}
				else if($('#billing_discount_'+id).prop("checked") == false) {
					$('#sdc_'+id).removeAttr("style");
					$('#sdc_'+id).css("border","2px solid #d3d3d369;");
				}
			}

		</script>

	</body>
</html>