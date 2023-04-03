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
				src: url("Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 10. POS_Checkout-rev1;
				--web-view-id: T_10_POS_Checkout-rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_10_POS_Checkout-rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_10_POS_Checkout-rev1 {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(248,248,248,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 10. POS_Checkout-rev1;
				--web-view-id: T_10_POS_Checkout-rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1798 {
				fill: rgba(255,255,255,1);
			}
			.Rectangle_1798 {
				position: absolute;
				overflow: visible;
				width: 495px;
				height: 596px;
				left: 80px;
				top: 120px;
			}
			#Rectangle_1637_bs {
				fill: url(#Rectangle_1637_bs);
			}
			.Rectangle_1637_bs {
				width: 100%;
				height: 100px;
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
				top: 6%;
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
			#Group_2058 {
				margin: 18px 18px 18px 50px;
				width: 124px;
				height: 19px;
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
			.pad-0 {
				padding: 0;
			}
			.pad-lr-1 {
				padding: 0 1rem;
			}
			.pr-1 {
				padding-right: 1rem ;
			}
			.ml-0 {
				margin-left: 0;
			}
			.ml-1 {
				margin-left: 1rem;
			}
			.ml-2 {
				margin-left: 2rem;
			}
			.mr-1 {
				margin-right: 1rem;
			}
			.mr-2 {
				margin-right: 2rem;
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
			.bt-1 {
				border-top: 2px solid rgba(211,211,211,1);
			}
			.bb-1 {
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			input[type=text], input[type=number] {
				width: 100%;
				border: 1px solid #ccc;
				border-radius: 8px;
				resize: vertical;
				height: 56px;
				text-indent: 1rem;
				font-family: "Inter-SemiBold";
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
			::-webkit-scrollbar {
				width: 8px;
				height: 2em;
			}
			::-webkit-scrollbar-track-piece {
				background: #eee;
			}
			::-webkit-scrollbar-thumb {
				background: rgba(0, 0, 0, 0.658);
				border-radius: 10px;
			}
			.form-container {
				width: 100%;
				display: block;
				margin-top: 1rem;
				margin-bottom: 2rem;
			}
			.user-container {
				width: 100%;
				height: 56px;
				background-color: rgba(211,211,211,1);
			}
			#user-name-container {
				width: fit-content;
				white-space: nowrap;
				line-height: 18px;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				letter-spacing: 1px;
				color: rgba(85,85,85,1);
				letter-spacing: -0.2px;
			}
			.users-button {
				width: 37px;
				height: 37px;
				white-space: nowrap;
				text-align: center;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: rgba(85,85,85,1);
				background-color: rgba(211,211,211,1);
				border: 2px solid rgba(85,85,85,1);
				border-radius: 8px;
				margin: 8px 50px 8px 8px;
				cursor: pointer;
			}
			.billing-summary-container {
				background-color: white;
				border-radius: 8px;
				height: auto;
				width: 85%;
				margin: 0 auto;
			}
			.billing-summary {
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-size: 22px;
				font-weight: bold;
				color: black;
				margin: 1rem 1rem;
				letter-spacing: 1px;
			}
			.payment-options {
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-size: 22px;
				font-weight: bold;
				color: black;
				margin: 1rem 1rem;
				letter-spacing: 1px;
			}
			.enter-credit-terms {
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-size: 17px;
				font-weight: 600;
				color: black;
				letter-spacing: 1px;
			}
			.enter-credit-terms p {
				font-size: 13px;
				font-weight: 100 !important;
			}
			.chose-payment-method {
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-size: 17px;
				font-weight: 600;
				color: black;
				letter-spacing: 1px;
			}
			.table-container {
				margin-bottom: 1.5rem;
			}
			table {
				border-collapse: collapse;
				border-spacing: 0;
				width: 100%;
				font-family: "Inter-SemiBold";
				font-size: 14px;
			}
			th {
				background-color: rgba(247,247,247,1);
				color: rgba(85,85,85,1);
				border-right: 4px solid white;
			}
			th:last-child {
				border-right: none;
			}
			th, td {
				text-align: left;
				padding: 1rem;
			}
			.total-amount-container {
				border-top: 3px dotted rgb(211 211 211);
				font-family: "Inter-SemiBold";
			}
			.subtotal-name, .vat-name, .discount-name, .rebate-name, .reward-name {
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
			}
			.subtotal-amount, .vat-amount {
				text-align: right;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: black;
			}
			.discount-amount, .rebate-amount, .reward-amount {
				text-align: right;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
			}
			.total-amount-name {
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				color: black;
			}
			.total-amount {
				text-align: right;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 22px;
				color: rgba(40,155,42,1);
			}
			.cash-container {
				height: 75px !important;
    			width: 90%;
				border-radius: 8px;
    			border: 1px solid lightgrey;
				background-color: #f8f8f8;
				color: black;
			}
			input[name="payment_option"] {
				opacity: 0;
				position: absolute;
			}
			label.payment_option {
				position: relative;
				cursor: pointer;
				width: 100%;
				font-size: 22px;
				height: 75px;
				border-radius: 8px;
				background-color: #f8f8f8;
			}
			label.payment_option span {
				height: 75px;
				display: flex;
				align-items: center;
				width: 100%;
				justify-content: center;
				font-family: "Inter-SemiBold";
			}
			input[name="payment_option"] + label.payment_option {
				border: 1px solid lightgrey;
				color: black;
			}
			input[name="payment_option"]:checked + label.payment_option {
				border: 2px solid rgba(40,155,42,1);
				color: rgba(40,155,42,1);
			}
			.proceed-to-payment {
				background-color: rgba(40,155,42,1);
				color: white;
				border-radius: 8px;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: bold;
				height: 56px;
				width: 100%;
				font-size: 18px;
				letter-spacing: 1px;
				cursor: pointer;
			}
			.button-holder {
				width: 100%;
				display: block;
				margin: 0 auto;
			}
			input[type="button"] {
				-webkit-appearance: button;
				cursor: pointer;
			}
			.input-group {
				clear: both;
				margin: 0 auto;
				position: relative;
				width: 80%;
				background-color: #f8f8f8;
				border-radius: 8px;
				height: 80px;
			}
			.input-group input[type='button'] {
				background-color: rgba(226,255,226,1);
				min-width: 43px;
				width: auto;
				transition: all 300ms ease;
				border-radius: 8px;
				margin-top: 4px;
				margin-left: 8px;
			}
			.input-group .button-minus,
			.input-group .button-plus {
				font-weight: bold;
				height: 45px;
				padding: 0;
				width: 50px;
				position: relative;
			}
			.button-minus {
				margin-left: 10px;
			}
			.button-plus {
				margin-left: 12px;
			}
			.input-group .quantity-field {
				position: relative;
				height: 45px;
				text-align: center;
				width: 40%;
				display: inline-block;
				font-size: 28px;
				margin: 0 0 5px;
				resize: vertical;
				background-color: #f8f8f8;
				border: 0;
				margin-top: 6px !important;
			}
			input[type="number"] {
				-moz-appearance: textfield;
				-webkit-appearance: none;
			}
			.days {
				font-size: 14px;
				display: block;
				font-family: "Inter-SemiBold";
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
				.pad-right-0-res {
					padding-right: 0;
				}
				::-webkit-scrollbar {
					width: 5px;
					height: 2em;
				}
				.Rectangle_1637_bs {
					height: 75px;
				}
				#Checkout {
					top: 3.5%;
				}
				#Group_2141 {
					top: 4%;
				}
				#Group_2058 {
					margin: 18px 18px 18px 25px;
				}
				.billing-summary-container {
					width: 90% !important;
				}
				.billing-summary {
					margin: 2rem 1rem 1rem 1rem !important;
					font-size: 20px !important;
				}
				table {
					font-size: 12px !important;
				}
				th, td {
					padding: 0.75rem !important;
				}
				.subtotal-name, .vat-name, .discount-name, .rebate-name, .reward-name,
				.subtotal-amount, .vat-amount, .rebate-amount, .reward-amount,
				.total-amount-name {
					font-size: 14px !important;
				}
				.total-amount {
					font-size: 20px !important;
				}
				.ml-1-md {
					margin-left: 0.5rem !important;
				}
				.mt-1-md {
					margin-top: 1rem !important;
				}
				.mt-1p5-md {
					margin-top: 1.5rem !important;
				}
				.mb-1-md {
					margin-bottom: 1rem !important;
				}
				.payment-options {
					font-size: 20px !important;
				}
				.enter-credit-terms, .chose-payment-method {
					font-size: 14px !important;
				}
				.enter-credit-terms p {
					font-size: 11px !important;
				}
				.pl-0-md {
					padding-left: 0 !important;
				}
				.pr-0-md {
					padding-right: 0 !important;
				}
				.input-group {
					width: 94% !important;
				}
				.input-group input[type='button'] {
					min-width: 30px !important;
				}
				.input-group .quantity-field {
					width: 35% !important;
					font-size: 15px !important;
				}
				label.payment_option {
					height: 50px !important;
					font-size: 18px !important;
				}
				label.payment_option span {
					height: 50px !important;
				}
				.users-button {
					margin: 8px 17px 8px 8px !important;
				}
				.mr-p5-md {
					margin-right: 0.5rem !important;
				}
				.pl-p5-md {
					padding-left: 0.5rem !important;
				}
				.pr-p5-md {
					padding-right: 0.5rem !important;
				}
			}

			/* phones */
			@media (max-width: 575px){
				.pad-right-0-res {
					padding-right: 0;
				}
				.mobile-view {
					display: block;
				}
				.big-screen-view {
					display: none;
				}
				.Rectangle_1637_bs {
					height: 75px;
				}
				#Checkout {
					top: 3.5%;
				}
				#Group_2141 {
					top: 4%;
				}
				.user-container {
					margin-bottom: 1rem;
				}
				.billing-summary-container {
					width: 98% !important;
					margin: 0 !important;
				}
				#Group_2058 {
					margin: 18px 18px 18px 0 !important;
				}
				.users-button {
					margin: 8px !important;
				}
				.billing-summary {
					margin: 2rem 1rem 1rem 1rem !important;
				}
				table {
					font-size: 12px !important;
				}
				th, td {
					padding: 0.75rem;
				}
				.subtotal-name, .vat-name, .discount-name, .rebate-name, .reward-name,
				.subtotal-amount, .vat-amount, .rebate-amount, .reward-amount,
				.total-amount-name {
					font-size: 14px !important;
				}
				.total-amount {
					font-size: 20px !important;
				}
				.table-container {
					margin-bottom: 1.5rem !important;
				}
				.payment-options {
					font-size: 20px !important;
				}
				.enter-credit-terms, .chose-payment-method {
					font-size: 14px !important;
				}
				.enter-credit-terms p {
					font-size: 11px !important;
				}
				.mt-1p5-sm {
					margin-top: 1.5rem !important;
				}
				.ml-1-sm {
					margin-left: 1rem !important;
				}
				.mt-1-sm {
					margin-top: 1rem !important;
				}
				.mt-p5-sm {
					margin-top: 0.5rem !important;
				}
				.mt-1p5-sm {
					margin-top: 1.5rem !important;
				}
				.mb-1-sm {
					margin-bottom: 1rem !important;
				}
				.form-container {
					margin-bottom: 1rem !important;
				}
				.input-group {
					margin: 0 !important;
					width: 97% !important;
				}
				.input-group .quantity-field {
					font-size: 18px !important;
					width: 38% !important;
				}
				.input-group input[type='button'] {
					min-width: 35px !important;
				}
				.mb-5-sm {
					margin-bottom: 5rem !important;
				}
				.mr-p5-sm {
					margin-right: 0.5rem !important;
				}
				.mr-0-sm {
					margin-right: 0rem !important;
				}
				label.payment_option {
					height: 55px !important;
					font-size: 20px !important;
				}
				label.payment_option span {
					height: 55px !important;
				}
				.row {
					margin-right: 0 !important;
					margin-left: 0 !important;
					width: 100% !important;
				}
				.col-12 {
					padding: 0 !important;
				}
				.plr-1-sm {
					padding-right: 1.5rem !important;
    				padding-left: 1rem !important;
				}
				.pl-0-sm {
					padding-left: 0 !important;
				}
				.pr-0-sm {
					padding-right: 0 !important;
				}
			}
		</style>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body>
		<div id="T_10_POS_Checkout-rev1">

			<svg class="Rectangle_1637_bs">
				<linearGradient id="Rectangle_1637_bs" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_bs" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Checkout">
				<span>Checkout</span>
			</div>
			<button id="Group_2141">
			<a  href="billing.php?login=<?php echo $_GET['login'];?>&cus=<?php echo $_GET['cus'];?>" id="Group_2090">
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

			<div class="row" style="margin-top: -4px; max-height: 900px;">

				<div class="col-sm-7 col-12 pad-right-0-res">

					<div class="user-container mobile-view">

						<div class="row">

							<div class="col-6">

																	   	<?php

$cus=$_GET['cus'];

$querycus=mysqli_query($con,"select * from  user where id='$cus' ")or die(mysqli_error());
$rowcus=mysqli_fetch_array($querycus);

?>


									<div id="Group_2058">
										<div id="user-name-container">
											<span><i class="fa fa-user"></i> &nbsp; <?php echo $rowcus['firstname'];?> <?php echo $rowcus['lastname'];?></span>
										</div>
									</div>

							</div>

							<div class="col-6 text-right">

								<button onclick="window.location.href='https://w3docs.com';" class="users-button"><i class="fa fa-users"></i></button>

							</div>

						</div>

					</div>

					<div class="form-container">

						<div class="billing-summary-container">

							<div class="row mt-1">
								<div class="col-12">
									<div class="billing-summary">
										<span>Billing Summary</span>
									</div>
								</div>
							</div>

							<div class="table-container row mt-1">

								<div class="col-12" style="overflow-x:hidden; overflow-y: auto;">
									<table>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Qty</th>
											<th>Total</th>
										</tr>
										
															    
					    	<?php

$com=$_GET['login'];
$total=0;
$query=mysqli_query($con,"select * from  cart where added_by='$com' and status='' order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  
    
    
    $cat=$row['prod_id'];

$querycate=mysqli_query($con,"select * from  products  where id='$cat'")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);
    
			$total=$total+$row['price'];
					
					
									?>	
										
										<tr>
											<td><?php echo $rowcateg['prod_name'];?></td>
											<td>₱<?php echo $rowcateg['prod_price'];?>/ <?php echo $rowcateg['prod_unit'];?></td>
											<td>x<?php echo $row['qty'];?></td>
											<td>₱<?php echo $row['price'];?></td>
										</tr>
									
									
									
									<?php
									
}
									?>
									</table>
								</div>

							</div>

							<div class="total-amount-container col-12 pad-lr-1">

								<div class="row mt-2 mt-1p5-sm">
		
									<div class="col-sm-6 col-6">
										<span class="subtotal-name">Subtotal</span>
									</div>
									<div class="col-sm-6 col-6 text-right">
										<span class="subtotal-amount">₱ <?php echo number_format($total,2);?></span>
									</div>
		
								</div>
				
						<?php
						
			$sid=$_GET['login'];			
						
				$tax1=0;
$queryuserss=mysqli_query($con,"SELECT sum(price) as total FROM cart WHERE added_by='$sid' and status='' ")or die(mysqli_error($con));
$rowuserss=mysqli_fetch_array($queryuserss);		
						
						
						$query2ata=mysqli_query($con,"select * from  tax where type='Percentage'")or die(mysqli_error());
while($row2ata=mysqli_fetch_array($query2ata)){  
						$taxp=$row2ata['percentage']/100;
						$tt=$rowuserss['total']*$taxp;
						
						$tax1=$tax1+$tt;
						
						
						?>
						
						
						
						
						
										<div class="row mt-1">

							<div class="col-sm-6 col-6">
								<span class="vat-name"><?php echo $row2ata['name'];?> <?php echo number_format($row2ata['percentage'],0);?>% </span>
							</div>
							<div class="col-sm-6 col-6 text-right">
									    
							    
								<spanclass="subtotal-amount"> <?php echo number_format($rowuserss['total']*$taxp,2);?>	</span>
							</div>

						</div>
						
						
						
										
						<?php
						
}
						
						?>
					
					
					
							
						<?php
						
			$sid=$_GET['login'];			
						
					$tax2=0;
$queryuserss=mysqli_query($con,"SELECT sum(price) as total FROM cart WHERE added_by='$sid' and status='' ")or die(mysqli_error($con));
$rowuserss=mysqli_fetch_array($queryuserss);		
						
						
						$query2ata=mysqli_query($con,"select * from  tax where type='Fixed'")or die(mysqli_error());
while($row2ata=mysqli_fetch_array($query2ata)){  
						$taxp=$row2ata['percentage'];
						
							$tt2=$rowuserss['total']*$taxp;
						
						$tax2=$tax2+$tt2;	
						
						?>
						
						
						
						
						
										<div class="row mt-1">

							<div class="col-sm-6 col-6">
								<span class="vat-name"><?php echo $row2ata['name'];?> <?php echo number_format($row2ata['percentage'],0);?>% </span>
							</div>
							<div class="col-sm-6 col-6 text-right">
									    
							    
								<spanclass="subtotal-amount"> <?php echo number_format($taxp,2);?>	</span>
							</div>

						</div>
						
						
						
										
						<?php
						
}
						
						?>
					
					
				
					
		<?php
		$sid=$_GET['login'];
		$td=0;
$td2=0;
		$querydiscount=mysqli_query($con,"select * from  cart_dis  where added_by='$sid' and status=''")or die(mysqli_error());
while($count=mysqli_fetch_array($querydiscount)){
    $dis=$count['dis_id'];
    
    $queryusers2=mysqli_query($con,"SELECT sum(percentage) as total FROM discounts WHERE id='$dis' and type='Percentage' ")or die(mysqli_error($con));
$rowuser2=mysqli_fetch_array($queryusers2);
$td=$td+$rowuser2['total']/100;


     $queryusers22=mysqli_query($con,"SELECT sum(percentage) as total FROM discounts WHERE id='$dis' and type='Fixed' ")or die(mysqli_error($con));
$rowuser22=mysqli_fetch_array($queryusers22);
$td2=$td2+$rowuser22['total'];
    
}
		?>
							
		
		<?php

		$gt=$rowuserss['total'];
		
		
		
$disdis=$gt*$td;

$dd=number_format($disdis+$td2,2);
$tot2=$gt-$dd;
		
		
		?>
		
			<div class="row mt-1">
		
									<div class="col-sm-6 col-6">
										<span class="discount-name">Discount</span>
									</div>
									<div class="col-sm-6 col-6 text-right">
										<span class="discount-amount"><?php echo number_format($dd,2);?></span>
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
								<div class="row mt-1 bt-1">
		
									<div class="col-sm-6 col-6 mt-2 mb-2">
										<div class="wrapper">
											<span class="total-amount-name">Total Amount</span>
										</div>
									</div>
									<div class="col-sm-6 col-6 text-right mt-2 mb-2">
										<span class="total-amount">₱ <?php echo number_format($tot2,2);?></span>
									</div>
		
								</div>
		
							</div>

						</div>

					</div>

				</div>

				<div class="col-sm-5 col-12 pad-0 bg-white sticky z-index-100 pr-1">

					<div class="user-container big-screen-view">

						<div class="row">

							<div class="col-6">
				<div id="Group_2058">
										<div id="user-name-container">
											<span><i class="fa fa-user"></i> &nbsp; <?php echo $rowcus['firstname'];?> <?php echo $rowcus['lastname'];?></span>
										</div>
									</div>

							</div>

							<div class="col-6 text-right">

								<button onclick="window.location.href='https://w3docs.com';" class="users-button"><i class="fa fa-users"></i></button>

							</div>

						</div>

					</div>

					<div class="row ml-0 mt-3 mt-1p5-md mt-1p5-sm bb-1">

						<div class="ml-2 ml-1-md ml-1-sm mb-1">

							<div class="payment-options">
								<span>Payment Options</span>
							</div>

						</div>

					</div>
<form method="POST" action="payment.php?login=<?php echo $_GET['login'];?>&cus=<?php echo $_GET['cus'];?>">
					<div class="ml-0 mt-2 mt-1-sm mb-2 mb-1-sm bb-1">

						<div class="row ml-2 ml-1-md ml-1-sm mb-2">

							<div class="col-sm-6 col-6 pr-0-md">

								<div class="wrapper">
									<span class="enter-credit-terms">Enter Credit Terms <br> <p>Lorem ipsum dolor vivamus <br> amet nullam eget</p></span>
								</div>

							</div>

							<div class="col-sm-6 col-6 pl-0-md pl-0-sm">
								<div class="input-group">
									<input type="button" value="-" class="button-minus" data-field="quantity">
									<input type="number" step="1" max="999" value="0" name="quantity" class="quantity-field">
									<input type="button" value="+" class="button-plus" data-field="quantity">
									<span class="text-center days w-100">DAYS</span>
								</div>
							</div>

						</div>

					</div>

					<div class="ml-0 mt-2 mt-1-sm mb-2">

						<div class="row ml-2 ml-1-md ml-1-sm mb-2 mb-1-md">
							<div class="col-sm-12 chose-payment-method">
								<span>Chose Payment Method</span>
							</div>
						</div>

						<div class="row ml-2 ml-1-md mr-1 mb-2 mr-p5-md plr-1-sm">






<input type="hidden" value="<?php echo $gt;?>" name="gt">

<input type="hidden" value="<?php echo $dd;?>" name="dis">

<input type="hidden" value="<?php echo $tot2;?>" name="tot2">
<input type="hidden" value="<?php echo $tax1+$tax2;?>" name="tax">
							<div class="col-sm-6 col-6 pr-p5-md pl-0-sm">
								
								<div class="wrapper">
									<input type="radio" id="cash" name="payment_option" value="cash">

									<label class="payment_option mb-4" for="cash">
										<span>
											<i class="fa fa-money"></i> &nbsp; Cash
										</span>
									</label>
								</div>
								
							</div>

							<div class="col-sm-6 col-6 pl-p5-md pr-0-sm">

								<div class="wrapper">
									<input type="radio" id="check" name="payment_option" value="check">

									<label class="payment_option mb-4" for="check">
										<span>
											<i class="fa fa-credit-card"></i> &nbsp; Check
										</span>
									</label>
								</div>

							</div>

							<div class="col-12 mt-3 mt-1p5-md mt-1-sm mb-5-sm">
								<div class="button-holder">
									<button name="signin"  type="submit" id="submit" class="proceed-to-payment">Proceed to Payment</button>
								</div>
							</div>
							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

		<script type="text/javascript">

			function incrementValue(e) {

				e.preventDefault();
				var fieldName = $(e.target).data('field'),
					parent = $(e.target).closest('div'),
					currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10),
					buttonPlus = $('.button-plus');

				if (!isNaN(currentVal)) {
					if(currentVal > 998) {
						parent.find('input[name=' + fieldName + ']').val(999);
					} else {
						parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
					}
				} else {
					parent.find('input[name=' + fieldName + ']').val(0);
				}

				var value = parseInt($('.quantity-field').val());

				if(value > 0) {
					buttonPlus.css("background-color","rgba(40,155,42,1)");
					buttonPlus.css("color","white");
				}

			}

			function decrementValue(e) {

				e.preventDefault();
				var fieldName = $(e.target).data('field'),
					parent = $(e.target).closest('div'),
					currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10),
					buttonPlus = $('.button-plus');

					

				if (!isNaN(currentVal) && currentVal > 0) {
					parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
				} else {
					parent.find('input[name=' + fieldName + ']').val(0);
				}

				var value = parseInt($('.quantity-field').val());

				if(value == 0) {
					buttonPlus.css("background-color","rgba(226,255,226,1)");
					buttonPlus.css("color","black");
				}

			}

			$('.input-group').on('click', '.button-plus', function(e) {
				incrementValue(e);
			});

			$('.input-group').on('click', '.button-minus', function(e) {
				decrementValue(e);
			});

			$('#submit').on('click', function(e) {

				//put the code here or action when proceed to payment clicked

			});

		</script>

	</body>
</html>