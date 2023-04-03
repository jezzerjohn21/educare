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
				src: url("Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 12. POS_Receipt-rev1;
				--web-view-id: T_12_POS_Receipt-rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_12_POS_Receipt-rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_12_POS_Receipt-rev1 {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(248,248,248,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 12. POS_Receipt-rev1;
				--web-view-id: T_12_POS_Receipt-rev1;
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
			#Payment {
				left: 0;
				right: 0;
				top: 5%;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 105px;
				white-space: nowrap;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: bold;
				font-size: 24px;
				color: rgba(255,255,255,1);
			}
			#Group_2141 {
				position: absolute;
				width: 19.4px;
				height: 14px;
				left: 5%;
				top: 5%;
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
				left: 0;
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
			#Group_1909 {
				width: 100%;
				height: 100px;
			}
			#Ellipse_335_ds {
				fill: url(#Ellipse_335_ds);
			}
			.Ellipse_335_ds {
				width: 100px;
				height: 100px;
			}
			#check {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 7px;
				stroke-linejoin: round;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.check {
				overflow: visible;
				position: absolute;
				width: 43.014px;
				height: 31.216px;
				left: 0;
    			right: 0;
    			top: 24%;
				margin: 0 auto;
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
				display: initial;
			}
			.receipt-container {
				padding-left: 1.5rem;
				padding-right: 1.5rem;
			}
			.receipt-header {
				background-color: rgba(40,155,42,1);
				color: white;
				font-size: 20px;
				font-family: "Inter-SemiBold";
				font-weight: bold;
				border-top-left-radius: 8px;
				border-top-right-radius: 8px;
				height: 60px;
				margin-top: 1.5rem;
				border: 1px solid rgba(211,211,211,1);
			}
			.receipt-body {
				height: auto;
				border: 1px solid rgba(211,211,211,1);
				border-bottom-left-radius: 8px;
				border-bottom-right-radius: 8px;
				font-family: "Inter-SemiBold";
			}
			.receipt-body-data-container {
				padding: 0 1.5rem;
			}
			.receipt-body-footer {
				border-top: 1px solid rgba(211,211,211,1);
				padding: 0 1.5rem;
				color: rgba(155,155,155,1);
			}
			.upper {
				font-size: 16px;
			}
			.below {
				font-size: 14px;
			}
			.pdf-button, .email-button , .print-button {
				height: 100px;
				width: 100%;
				background-color: rgba(45,71,53,1);
				color: white;
				font-size: 22px;
				font-family: "Inter-SemiBold";
				font-weight: normal;
				cursor: pointer;
			}
			.pl-0 {
				padding-left: 0;
			}
			.pr-0 {
				padding-right: 0;
			}
			.pl-p5{
				padding-left: 0.25rem;
			}
			.pr-p5 {
				padding-right: 0.25rem;
			}
			.total-amount-container {
				margin-top: 3rem;
			}
			.per-order {
				margin-top: 1rem;
			}
			.per-order:first-child {
				margin-top: 1.5rem;
			}
			.total-amount-name, .total-amount {
				font-size: 18px;
			}
			.payment-successful-container {
				margin-top: 10rem;
			}
			.payment-successful {
				font-style: normal;
				font-weight: bold;
				font-size: 32px;
				color: rgba(34,34,34,1);
				font-family: "Inter-SemiBold";
				margin-top: 1.5rem;
			}
			.new-bill {
				height: 56px;
				width: 50%;
				background-color: rgba(40,155,42,1);
				color: white;
				font-size: 18px;
				font-family: "Inter-SemiBold";
				cursor: pointer;
				border-radius: 8px;
			}
			.back {
				height: 56px;
				width: 50%;
				background-color: #f8f8f8;
				color: black;
				font-size: 18px;
				font-family: "Inter-SemiBold";
				cursor: pointer;
				border-radius: 8px;
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
				.Rectangle_1637_br {
					height: 80px !important;
				}
				.check {
					top: 22% !important;
					left: 3% !important;
				}
				.receipt-container {
					padding-left: 0.5rem !important;
    				padding-right: 1rem !important;
				}
				.receipt-header {
					font-size: 18px !important;
				}
				.receipt-body-data-container {
					padding: 0 1rem !important;
				}
				.product-name, .price-per-kilo, .quantity, .amount {
					font-size: 13px !important;
				}
				.new-bill, .back {
					width: 83% !important;
					font-size: 16px !important;
				}
				.pr-0-md {
					padding-right: 0 !important;	
				}
				.pl-0-md {
					padding-left: 0 !important;
				}
				.payment-successful {
					font-size: 30px !important;
				}
				.pdf-button, .email-button, .print-button {
					height: 85px !important;
					font-size: 20px !important;
				}
				.upper,
				.credit-terms,
				.amount-due-name, .total-amount-due, 
				.cash-name, .total-cash,
				.change-name, .total-change {
					font-size: 14px !important;
				}
				.below {
					font-size: 12px !important;
				}
				.total-amount-name, .total-amount {
					font-size: 16px !important;
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
				.payment-successful-container {
					margin-top: 4rem !important;
				}
				.payment-successful {
					font-size: 25px !important;
				}
				#psc {
					background-color: white;
				}
				.mb-4-sm {
					margin-bottom: 4rem !important;
				}
				.receipt-container {
					padding-left: 1rem !important;
    				padding-right: 1rem !important;
				}
				.receipt-body-data-container {
					padding: 0 1rem !important;
				}
				.product-name, .price-per-kilo, .quantity, .amount {
					font-size: 13px !important;
				}
				.pdf-button, .email-button, .print-button {
					height: 85px !important;
					font-size: 20px !important;
				}
				.upper,
				.credit-terms,
				.amount-due-name, .total-amount-due, 
				.cash-name, .total-cash,
				.change-name, .total-change {
					font-size: 14px !important;
				}
				.below {
					font-size: 12px !important;
				}
				.total-amount-name, .total-amount {
					font-size: 16px !important;
				}
				.receipt-body-footer {
					padding: 0 1rem !important;
				}
				.pl-0-sm {
					padding-left: 0 !important;
				}
				
			}
		</style>
	</head>
	<body>
		<div id="T_12_POS_Receipt-rev1">

			<!-- <svg class="Rectangle_1637_br">
				<linearGradient id="Rectangle_1637_br" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_br" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg> -->
			<!-- <div id="Payment">
				<span>Payment</span>
			</div>
			<div id="Group_2141">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</div> -->

			<div class="row" style="margin-top: -4px;">

				<div class="col-sm-6 col-12 pr-0-md" id="psc">
					
					<div class="payment-successful-container w-100 text-center">

						<div id="Group_1909" class="big-screen-view">
					
							<svg class="check" viewBox="4 6 33.114 22.766">
						<img src="check.svg">
							</svg>
						</div>

						<div class="payment-successful mt-1">
							<span>Payment Successful!</span>
						</div>

						<button onclick="window.location.href='billing.php?login=<?php echo $_GET['login'];?>'" class="new-bill mt-3 big-screen-view">Start a New Bill</button>

						<button onclick="window.location.href='dashboard.php?login=<?php echo $_GET['login'];?>'" class="back mt-1 big-screen-view">Back to Dashboard</button>

					</div>

				</div>

				<div class="col-sm-6 col-12 bg-white sticky z-index-100 pl-0-md">

					<div class="receipt-container">

						<div class="receipt-header">
							<span class="d-block w-100 text-center mt-1">Receipt# <?php echo $_GET['invoice'];?></span>
						</div>

						<div class="receipt-body">

							<div class="receipt-body-data-container">

								<div class="receipts-container">







	<?php
include('head.php');
$com=$_GET['login'];
$invoice=$_GET['invoice'];
$total=0;
$query=mysqli_query($con,"select * from  cart where added_by='$com' and invoice_no='$invoice' order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  
    
    
    $cat=$row['prod_id'];

$querycate=mysqli_query($con,"select * from  products  where id='$cat'")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);
    
			$total=$total+$row['price'];
					
					
									?>	
										
				
									



									<div class="per-order">

										<div class="row">
											<div class="col-6">
												<span class="product-name"><?php echo $rowcateg['prod_name'];?></span>
											</div>
											<div class="col-6"></div>
										</div>
										<div class="row">
											<div class="col-6">
												<span class="price-per-kilo gray">₱<?php echo $rowcateg['prod_price'];?>/ <?php echo $rowcateg['prod_unit'];?></span>
											</div>
											<div class="col-2 text-center">
												<span class="quantity gray">x<?php echo $row['qty'];?></span>
											</div>
											<div class="col-4 text-right pl-0-sm">
												<span class="amount">₱<?php echo $row['price'];?></span>
											</div>
										</div>

									</div>
									
																	
									<?php
									
}
									?>


								</div>
		<?php
		$cat2=$_GET['invoice'];
		$querycate=mysqli_query($con,"select * from  sales  where invoice='$cat2'")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);
		
		$payment=$rowcateg['payment_option'];
		
		$vat=$rowcateg['sub_total']*0.12;
		$gt=$vat+$total;
		?>
								<div class="total-amount-container">

									<div class="row mt-p5">
										<div class="col-6">
											<span class="total-amount-name bold">Total Amount</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount bold">₱ <?php echo number_format($total,2);?></span>
										</div>
									</div>
<?php

if($payment!="cash"){
?>
									<div class="row mt-p5">
										<div class="col-12">
											<span class="credit-terms">Credit Terms: <?php echo $rowcateg['no_month'];?> Days</span>
										</div>
									</div>
				<div class="row mt-1">
										<div class="col-6">
											<span class="amount-due-name">Total Tax</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount-due">₱ <?php echo $rowcateg['tax'];?></span>
										</div>
									</div>
									
										<div class="row mt-1">
										<div class="col-6">
											<span class="amount-due-name">Discount</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount-due">₱ <?php echo $rowcateg['discount'];?></span>
										</div>
									</div>
									<div class="row mt-1">
										<div class="col-6">
											<span class="amount-due-name">Amount Due</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount-due">₱ <?php echo $rowcateg['grand_total'];?></span>
										</div>
									</div>
									
											<div class="row mt-p5">
										<div class="col-6">
											<span class="change-name">Balance</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-change">₱ <?php echo $rowcateg['balance'];?></span>
										</div>
									</div>
									
<?php

}else{
?>
				<div class="row mt-1">
										<div class="col-6">
											<span class="amount-due-name">Total Tax</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount-due">₱ <?php echo $rowcateg['tax'];?></span>
										</div>
									</div>
									
									
									
									
									
									
									
									
										<div class="row mt-1">
										<div class="col-6">
											<span class="amount-due-name">Discount</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount-due">₱ <?php echo $rowcateg['discount'];?></span>
										</div>
									</div>
		
			<div class="row mt-1">
										<div class="col-6">
											<span class="amount-due-name">Amount Due</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-amount-due">₱ <?php echo $rowcateg['grand_total'];?></span>
										</div>
									</div>
		
		
		
									<div class="row mt-p5">
										<div class="col-6">
											<span class="cash-name">Cash</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-cash">₱ <?php echo $rowcateg['amount'];?></span>
										</div>
									</div>

									<div class="row mt-p5">
										<div class="col-6">
											<span class="change-name">Change</span>
										</div>
										<div class="col-6 text-right">
											<span class="total-change">₱ <?php echo $rowcateg['change_amount'];?></span>
										</div>
									</div>
<?php

}
?>
								</div>

							</div>

							<div class="receipt-body-footer mt-1 mb-1">

								<div class="row mt-1">
									<div class="col-6 upper">
										Receipt# <?php echo $_GET['invoice'];?>
									</div>
									<div class="col-6 text-right upper">
									    
									    
									    
									    
										<?php
										$date=date_create($rowcateg['date_added']);
echo date_format($date,"Y/m/d");
										
										
										?>
									</div>
								</div>

								<div class="row mt-1">
									<div class="col-6 below">
										Cashier: <?php echo $rowuser['firstname'];?> <?php echo $rowuser['lastname'];?>
									</div>
									<div class="col-6 text-right below">
										<?php
										$date=date_create($rowcateg['date_added']);
echo date_format($date,"H:i");
										
										
										?>
									</div>
								</div>

							</div>

						</div>

					</div>

					<div class="row mt-1 ">

						<div class="col-sm-4 col-4 pr-p5 pl-0">
							<button type="button" class="pdf-button">

								<i class="fa fa-file-pdf-o"></i>
								<span class="d-block">PDF</span>

							</button>
						</div>

						<div class="col-sm-4 col-4 pr-0 pl-0">
							<button type="button" class="email-button">

								<i class="fa fa-paper-plane"></i>
								<span class="d-block">Email</span>

							</button>
						</div>

						<div class="col-sm-4 col-4 pl-p5">
							<button type="button" class="print-button">
								
								<i class="fa fa-print"></i>
								<span class="d-block">Print</span>
								
							</button>
						</div>

					</div>
					
				</div>

			</div>

		</div>
	</body>
</html>