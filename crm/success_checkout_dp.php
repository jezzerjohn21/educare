<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>[T] 12 CRM_Popup_success</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("./Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 12 CRM_Popup_success;
				--web-view-id: T__12A__CRM_Popup_success;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T__12A__CRM_Popup_success;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T__12A__CRM_Popup_success {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(243,243,243,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 12 CRM_Popup_success;
				--web-view-id: T__12A__CRM_Popup_success;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
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

			/* The Modal (background) */
			.success-modal, .failed-modal {
				display: none; /* Hidden by default */
				position: absolute; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow-y: auto;
				overflow-x: hidden;
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
				font-family: "Inter-SemiBold";
			}

			/* Modal Content */
			.success-modal-content, .failed-modal-content {
				background-color: #fefefe;
				margin: 0 auto;
				padding: 20px;
				margin-top: 48px;
				border: 1px solid #888;
				width: 50%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animateright;
				-webkit-animation-duration: 0.4s;
				animation-name: animateright;
				animation-duration: 0.4s;
				border-radius: 20px;
			}

			/* Add Animation */
			@-webkit-keyframes animateright {
				from {right:-300px; opacity:0} 
				to {right:0; opacity:1}
			}

			@keyframes animateright {
				from {right:-300px; opacity:0}
				to {right:0; opacity:1}
			}

			/* The Close Button */
			.success-modal-close, .failed-modal-close {
				color: white;
				font-size: 32px;
				font-weight: bold;
				position: absolute;
				top: 120px;
				right: 368px;
			}
			.success-modal-close:hover,
			.success-modal-close:focus,
			.failed-modal-close:hover,
			.failed-modal-close:focus {
				text-decoration: none;
				cursor: pointer;
			}
			.success-modal-body, .failed-modal-body {padding: 2px 16px;}
			.success-text, .failed-text {
				font: 20px "Inter-SemiBold";
				font-weight: bolder;
				letter-spacing: 1px;
			}
			.success-message, .failed-message {
				font: 16px "Inter-SemiBold";
				font-weight: 100;
			}
			.success-btn, .failed-btn {
				background-color: rgba(40,155,42,1);
				color: white;
				font: 20px "Inter-SemiBold";
				height: 56px;
				width: 35%;
				border-radius: 8px;
				cursor: pointer;
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
				.success-modal-close, .failed-modal-close {
					top: 75px !important;
					right: 180px !important;
				}
				.success-modal-content, .failed-modal-content {
					padding: 10px 20px !important;
					width: 60% !important;
				}
				.success-btn, .failed-btn {
					height: 50px !important;
					width: 70% !important;
				}
			}

			/* phones */
			@media (max-width: 575px){
				.success-modal-close, .failed-modal-close {
					top: 113px !important;
					right: 62px !important;
				}
				.success-modal-content, .failed-modal-content {
					padding: 10px 20px !important;
					width: 80% !important;
				}
				.success-text, .failed-text {
					font: 18px "Inter-SemiBold" !important;
				}
				.success-message, .failed-message {
					font: 14px "Inter-SemiBold";
				}
				.success-btn, .failed-btn {
					font: 18px "Inter-SemiBold" !important;
					height: 50px !important;
					width: 100% !important;
				}
			}

		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body>


		<!-- The Success Modal -->


			<div class="row h-100">

				<div class="col-sm-12 col-12">
					<!-- Modal content -->
					<div class="wrapper">

						<span class="success-modal-close"><i class="fa fa-times-circle-o"></i></span>

						<div class="success-modal-content">
							
							<div class="success-modal-body">

								<div class="row mt-2 mb-2">

									<div class="col-12 text-center">
										<img src="./check.svg" class="success-icon" alt="check">
									</div>
									<div class="col-12 mt-1 text-center">
										<span class="success-text">Ordered Successfully Posted!</span>
									</div>
									
									
											<div class="col-12 mt-1">
									    <center>
										<p class="success-message">Transaction No. <?php echo $_GET['txnid'];?></p></center>
									</div>
									
											<div class="col-12 mt-1">
									    <center>
										<p class="success-message">Reference No. <?php echo $_GET['refno'];?></p></center>
									</div>
									
									
										<div class="col-12 mt-1">
									    <center>
										<p class="success-message">Message: <?php echo $_GET['message'];?></p></center>
									</div>
									
									
									
									
									<?php
									
									         include('../dist/dbcon.php');
 $re=$_GET['txnid'];
$ref=$_GET['refno'];
$message=$_GET['message'];
$message2=$_GET['status'];
		mysqli_query($con,"update sales_crm set ref='$ref',message='$message',status3='$message2' where invoice='$re'")or die(mysqli_error());


$querytt=mysqli_query($con,"select * from  sales_crm where invoice='$re' ")or die(mysqli_error());
$rowtt=mysqli_fetch_array($querytt); 

									?>
									
									
									<div class="col-12 mt-1">
									    <center>
										<p class="success-message">Thank you for trusting us. Please wait for the approval of your order. </p></center>
									</div>
									<div class="col-12 mt-1 text-center">
										<button onclick="window.location.href='crm_transaction.php?login=<?php echo $rowtt['user_id'];?>'" onClick="" type="button" class="success-btn">List of Orders</button>
									</div>

								</div>

							</div>
							
						</div>

					</div>
					
				</div>


		
		</div>

		<!-- The Success Modal -->
		<div id="failedModal" class="failed-modal">

			<div class="row h-100">

				<div class="col-sm-12 col-12">
					<!-- Modal content -->
					<div class="wrapper">

						<span class="failed-modal-close"><i class="fa fa-times-circle-o"></i></span>

						<div class="failed-modal-content">
							
							<div class="failed-modal-body">

								<div class="row mt-2 mb-2">

									<div class="col-12 text-center">
										<img src="./fail.svg" class="failed-icon" alt="fail">
									</div>
									<div class="col-12 mt-1 text-center">
										<span class="failed-text">Failed!</span>
									</div>
									<div class="col-12 mt-1">
										<p class="failed-message">Cras viverra sem vitae condiment malesuaa elit quam eleifend libero, et aliquet ligula nibh ac est.</p>
									</div>
									<div class="col-12 mt-1 text-center">
										<button type="button" class="failed-btn">Button Text</button>
									</div>

								</div>

							</div>
							
						</div>

					</div>
					
				</div>

			</div>
			
		
		</div>

		<script type="text/javascript">

			// Get the success modal
			var successModal = document.getElementById("successModal");
			function openSuccessModal() {
				if( $('#successModal').css('display') == 'block' ) {
					successModal.style.display = "none";
				} else {
					successModal.style.display = "block";
				}
			}

			var closeSuccessModal = document.getElementsByClassName("success-modal-close")[0];
			closeSuccessModal.onclick = function() { 
				successModal.style.display = "none";
			}

			// Get the failed modal
			var failedModal = document.getElementById("failedModal");
			function openFailedModal() {
				if( $('#failedModal').css('display') == 'block' ) {
					failedModal.style.display = "none";
				} else {
					failedModal.style.display = "block";
				}
			}

			var closeFailedModal = document.getElementsByClassName("failed-modal-close")[0];
			closeFailedModal.onclick = function() { 
				failedModal.style.display = "none";
			}

		</script>

	</body>
</html>