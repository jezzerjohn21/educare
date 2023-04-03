<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loyaleadsta</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
			}
			@font-face {
				font-family: "Inter-Regular";
				src: url("Inter-Regular.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 09.A. CRM_Products;
				--web-view-id: T_09A_CRM_Products;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_09A_CRM_Products;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_09A_CRM_Products {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(243,243,243,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 09.A. CRM_Products;
				--web-view-id: T_09A_CRM_Products;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}

			#Rectangle_1637 {
				fill: rgba(0,133,63,1);
			}
			.Rectangle_1637 {
				width: 100%;
				height: 100px;
			}
			#Group_2141 {
				position: absolute;
				height: 14px;
				left: 15%;
				top: 5.8%;
				overflow: visible;
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
				padding-right: 10px;
				padding-left: 10px;
					padding-bottom: 10px;
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
			.search-container {
				position: absolute;
				overflow: visible;
				width: 59%;
				height: 56px;
				left: 19%;
				top: 3%;
			}
			.search-container i {
				position: absolute;
				left: 94%;
				top: 15%;
				font-size: 20px;
			}
			.icon {
				padding: 10px;
				min-width: 40px;
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
			.filter-container {
				position: absolute;
				left: 80%;
				right: 0;
				top: 5.8%;
				width: 100%;
			}
			.filter-btn {
				background-color: unset;
				color: white;
				cursor: pointer;
				font-size: 20px;
				font-family: "Inter-SemiBold";
			}

			.store-details-container {
				background-color: white;
				height: 126px;
				width: 100%;
				margin-top: -4px;
				padding-left: 12rem;
    			padding-right: 12.5rem;
			}
			.image-container {
				display: table-cell;
    			vertical-align: middle;
				height: 126px;
			}
			#store-image {
				border-radius: 50%;
				height: auto;
				width: 70px;
				margin-left: 1rem;
				vertical-align: middle;
			}
			.store-nameandrate-container, .store-ownerandlocation-container {
				display: table-cell;
    			vertical-align: middle;
				height: 126px;
			}
			.store-name {
				font-family: "Inter-SemiBold";
				font-size: 25px;
				font-weight: bold;
			}
			.store-owner, .store-location, .store-rate {
				font-family: "Inter-Regular";
				font-size: 16px;
				color: rgba(155,155,155,1);
				/* color: black; */
			}
			.store-ownerandlocation-container .d-block:first-child, .store-nameandrate-container .d-block:first-child {
				margin-top: 0;
			}
			.store-ownerandlocation-container .d-block, .store-nameandrate-container .d-block {
				margin-top: .25rem;
			}
			.store-nameandrate-container .d-block {
				margin-left: 1.5rem;
			}

			.container {
				padding-left: 12rem;
    			padding-right: 12.5rem;
				margin-top: 2rem;
			}
			.product-container {
				border-radius: 8px;
				background-color: white;
				width: 100%;
				height: auto;
				box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
			}
			.product-image {
			
				width: 100%;
				height:100px;
				margin-top:6px;
				border-top-left-radius: 8px;
				border-top-right-radius: 8px;
				object-fit: scale-down;

			}
			.product-details {
				padding: 0.38rem 0.75rem;
			}
			.product-details .d-block:first-child {
				margin-top: 0;
			}
			.product-details .d-block:last-child {
				margin-bottom: 0.38rem;
				word-break: break-all;
			}
			.product-details .d-block {
				margin-top: 0.38rem;
			}
			.product-name {
				font-family: "Inter-SemiBold";
				font-size: 16px;
				font-weight: normal;
				color:black;
				
				
			}
			.product-rate {
				font-family: "Inter-SemiBold";
				font-size: 12px;
				font-weight: normal;
			}
			.product-price-per-kilo {
				font-family: "Inter-SemiBold";
				font-size: 16px;
				font-weight: normal;
				color: rgba(0,133,63,1);
			}
			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: absolute; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 15%;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow-y: auto;
				overflow-x: hidden;
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
				font-family: "Inter-SemiBold";
			}

			/* Modal Content */
			.modal-content {
				position: relative;
				background-color: #fefefe;
				margin: auto;
				padding: 0 2rem;
				border: 1px solid #888;
				width: 100%;
				height: 100%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animateright;
				-webkit-animation-duration: 0.4s;
				animation-name: animateright;
				animation-duration: 0.4s;
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
			.close {
				color: white;
				float: right;
				font-size: 32px;
				font-weight: bold;
				margin-top: -40px;
				margin-right: -3px;
			}

			.close:hover,
			.close:focus {
				text-decoration: none;
				cursor: pointer;
			}

			.modal-header {
				color: white;
			}

			.modal-body {padding: 2px 16px;}

			.modal-footer {
				padding: 2px 16px;
				background-color: #5cb85c;
				color: white;
			}

			.filter-name {
				font-family: "Inter-SemiBold";
				font-size: 20px;
				font-weight: bold;
			}

			.sort-by {
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: bold;
			}
			
			.accordion {
				background-color: unset;
				color: #444;
				cursor: pointer;
				padding: 18px;
				width: 100%;
				border: none;
				text-align: left;
				outline: none;
				font-size: 15px;
				transition: 0.4s;
				border-top: 2px solid rgba(211,211,211,1);
			}
			.accordion:after {
				content: '\003E';
				color: rgba(40,155,42,1);
				font-weight: bold;
				float: right;
				margin-left: 5px;
				font-size: 18px;
			}

			.active:after {
				content: "\005E";
			}

			.panel {
				padding: 0 18px;
				background-color: white;
				max-height: 0;
				overflow: hidden;
				transition: max-height 0.2s ease-out;
			}

			input[type="checkbox"] {
				visibility: hidden;
			}
			input[type="checkbox"] + label:before {
				border: 1px solid rgba(211,211,211,1);
				background-color: rgba(243,243,243,1);;
				content: "\00a0";
				display: inline-block;
				font: 1.25em  "Inter-SemiBold";
				height: 15px;
				width: 15px;
				margin: 0 .25em 0 0;
				padding: 0;
				vertical-align: top;
			}
			input[type="checkbox"]:checked + label:before {
				background: rgba(224,194,26,1);
				color: white;
				text-align: center;
			}

			.apply-filter-btn {
				background-color: rgba(40,155,42,1);
				color: white;
				font: 20px "Inter-SemiBold";
				height: 56px;
				width: 100%;
				border-radius: 8px;
				cursor: pointer;
			}
			.reset-btn {
				background-color: rgba(211,211,211,1);
				color: black;
				font: 20px "Inter-SemiBold";
				height: 56px;
				width: 100%;
				border-radius: 8px;
				cursor: pointer;
			}
			.seperator {
				height: 56px;
				width: 56px;
				vertical-align: middle;
				display: table-cell;
				text-align: center;
			}
			.price-min, .price-max {
				background-color: #f8f8f8;
				border: 1px solid rgba(211,211,211,1) !important;
				text-align: center;
			}
			.p-0 {
				padding: 0;
			}
			.pl-0 {
				padding-left: 0;
			}
			.pr-0 {
				padding-right: 0;
			}
			.minmax-text {
				font: 16px "Inter-SemiBold";
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
				.store-container {
					padding-left: 4rem !important;
    				padding-right: 4.5rem !important;
				}
				#Group_2141 {
					left: 9% !important;
				}
				.search-container {
					left: 15% !important;
					width: 63% !important;
				}
				.search-container i {
					left: 90% !important;
					top: 13% !important;
					z-index: 1 !important;
				}
				.filter-container {
					left: 80% !important;
				}
				.filter-btn {
					font-size: 18px !important;
				}
				.store-details-container {
					padding-left: 4rem !important;
    				padding-right: 4.5rem !important;
					height: 115px !important;
				}
				.container {
					padding-left: 4rem !important;
    				padding-right: 4.5rem !important;
				}
				#store-image {
					margin-left: 0 !important;
				}
				.store-name {
					font-size: 23px !important;
				}
				.store-owner, .store-location, .store-rate {
					font-size: 14px !important;
				}
				.product-name, .product-price-per-kilo {
					font-size: 14px !important;
				}
				.modal-body {
					padding: 2px 0 !important;
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
				.search-container {
					left: 15% !important;
					top: 3.5% !important;
					width: 60% !important;
				}
				.search-container i {
					left: 82% !important;
					top: 10% !important;
				}
				#search {
					height: 52px !important;
				}
				.filter-container {
					left: 77% !important;
				}
				.filter-btn {
					font-size: 16px !important;
				}
				.store-details-container, .container {
					padding-left: 1.5rem !important;
					padding-right: 1.5rem !important;
				}
				#store-image {
					width: 50px !important;
					margin-left: 0 !important;
				}
				.store-name {
					font-size: 18px !important;
				}
				.store-owner, .store-location, .store-rate {
					font-size: 14px !important;
				}
				.store-details-container {
					height: auto !important;
				}
				.store-ownerandlocation-container {
					height: auto !important;
				}
				.store-ownerandlocation-container .d-block:last-child {
					margin-bottom: 1rem !important;
				}
				.image-container, .store-nameandrate-container {
					height: 90px !important;
				}
				.store-nameandrate-container .d-block {
					margin-left: 0 !important;
				}
				.product-name, .product-price-per-kilo {
					font-size: 14px !important;
				}
				.product-rate {
					font-size: 11px !important;
				}
				.modal-content {
					padding: 0 1rem !important;
				}
				.filter-name, .apply-filter-btn, .reset-btn {
					font-size: 18px !important;
				}
				.sort-by {
					font-size: 16px !important;
				}
				.panel label {
					font-size: 14px !important;
				}
			}

		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body>

		<div id="T_09A_CRM_Products">

			<svg class="Rectangle_1637">
				<rect id="Rectangle_1637" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>

			<a href="store.php?login=<?php echo $_GET['login'];?>" id="Group_2141">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</a>

			<div class="search-container">
				<i class="fa fa-search icon"></i>
				<input type="text" id="search" name="search" placeholder="Search">
			</div>

			<div class="filter-container">
				<button type="button" class="filter-btn" onclick="openModal()">
					Filter <i class="fa fa-sliders"></i>
				</button>
			</div>

<?php
      include('../dist/dbcon.php');
      $ii=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM user WHERE id='$ii' order by business_name asc")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
	    
	    
	    
	    
	 $region=$row['region'];
	    
$queryr=mysqli_query($con,"SELECT * FROM refregion WHERE regCode='$region'")or die(mysqli_error($con));
	$rowr=mysqli_fetch_array($queryr);
	    
	

?>
			
			<div class="store-details-container">

				<div class="row">

					<div class="col-2 col-sm-1 col-lg-1">

						<div class="image-container">
							<img id="store-image" src="../pos/uploads/<?php echo $row['logo'];?>" alt="store image" srcset="../pos/uploads/<?php echo $row['logo'];?>">
						</div>

					</div>

					<div class="col-10 col-sm-7 col-lg-6">
						
						<div class="store-nameandrate-container">

							<div class="d-block">
								<span class="store-name"><?php echo $row['business_name'];?></span>	 
							</div>
							<div class="d-block">
								<span class="store-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9</span>	 
							</div>

						</div>

					</div>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>
					<div class="col-10 col-sm-7 col-lg-2">
						
						<div class="store-nameandrate-container">

					<?php
						$user_id2=$_GET['id'];
						$user_id=$_GET['login'];
	$querycate2s=mysqli_query($con,"select * from  temp_prod  where user_id='$user_id' and status='Pending' and store='$user_id2' ")or die(mysqli_error());
$rowcateg2s=mysqli_num_rows($querycate2s);
					
					?>
							<div class="d-block">
							    
							    	<span class="store-rate"><a style="text-decoration: none;" href="cart.php?login=<?php echo $_GET['login'];?>&store=<?php echo $_GET['id'];?>"><font color="green"> <i class="fa fa-shopping-cart"></i>Cart(<?php echo $rowcateg2s;?>)</font></a></span>	
							    
							    
							
							</div>

						</div>

					</div>



					<div class="col-12 col-sm-4 col-lg-3">

						<div class="store-ownerandlocation-container">

							<div class="d-block">
								<span class="store-owner"><i class="fa fa-12px-md fa-user gray"></i> <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></span>	 
							</div>
							<div class="d-block">
								<span class="store-location"><i class="fa fa-12px-md fa-map-marker gray"></i><?php echo $rowr['regDesc'];?></span>	 
							</div>

						</div>
						
					</div>
	
				</div>

			</div>

			<div class="container">
				
				<div class="row">















					    	<?php

$com=$_GET['login'];
$com2=$_GET['id'];

$query=mysqli_query($con,"select * from  products where company='$com2' order by prod_name asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
$cat=$row['prod_categ'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['added_by'];

$querycate2=mysqli_query($con,"select * from  user  where id='$cat2' ")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);


$cat2a=$row['update_by'];

$querycate2a=mysqli_query($con,"select * from  user  where id='$cat2a' ")or die(mysqli_error());
$rowcateg2a=mysqli_fetch_array($querycate2a);
				  ?>  



					<div class="col-sm-4 col-6 col-lg-3">

						<a style="text-decoration: none;" href="product_view.php?login=<?php echo $_GET['login'];?>&id=<?php echo $row['id'];?>&id2=<?php echo $_GET['id'];?>"><div class="product-container">

							<div class="product-image-container">
							<center>	<img id="product-image" class="product-image" alt="product image" src="../auth/users/products/<?php echo $row['prod_image'];?>" srcset="../auth/users/products/<?php echo $row['prod_image'];?>"></center>
							</div>

							<div class="product-details">

								<div class="d-block">
									<span class="product-name"><?php echo $row['prod_name'];?></span>	 
								</div>
								<div class="d-block">
									<span class="product-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9</span>	 
								</div>
								<div class="d-block">
									<span class="product-price-per-kilo">₱<?php echo $row['prod_price'];?>/<?php echo $row['prod_unit'];?></span>	 
								</div>

							</div>

						</div></a>

					</div>







					    	<?php

}
				  ?>  















				</div>

			</div>
			
		</div>

		<!-- The Modal -->
		<div id="myModal" class="modal">

			<div class="row h-100">

				<div class="col-sm-6 col-12 col-lg-6 big-screen-view"></div>

				<div class="col-sm-6 col-12 col-lg-6">
					<!-- Modal content -->
					<div class="wrapper">

						<div class="modal-content">
							
							<div class="modal-body">

								<div class="row mt-2">

									<div class="col-12">
										<span class="w-100 filter-name bold">Filter Products</span>
									</div>

								</div>

								<div class="row mt-1">

									<div class="col-12 mt-1">
										<button class="accordion">
											<span class="w-100 sort-by bold">Sort By</span>
										</button>
										<div class="panel">

											<div class="row mt-p5">
												<input type="checkbox" id="price_low_high" name="sortBy" value="price_low_high">
												<label for="price_low_high"> Price (Low - High)</label>
											</div>
											
											<div class="row mt-p5">
												<input type="checkbox" id="price_high_low" name="sortBy" value="price_high_low">
												<label for="price_high_low"> Price (High - Low)</label>
											</div>

											<!-- always make this div last -->
											<div class="row mt-p5 mb-1">
												<input type="checkbox" id="highest_ratings" name="sortBy" value="highest_ratings">
												<label for="highest_ratings"> Highest Ratings</label>
											</div>
											<!-- always make this div last -->

										</div>
										
										<button class="accordion">
											<span class="w-100 sort-by bold">Categories</span>
										</button>
										<div class="panel">

											<div class="row mt-p5">
												<input type="checkbox" id="sample_category" name="categories" value="sample_category">
												<label for="sample_category"> Sample Category</label>
											</div>
											
											<!-- always make this div last -->
											<div class="row mt-p5 mb-1">
												<input type="checkbox" id="sample_category_1" name="categories" value="sample_category_1">
												<label for="sample_category_1"> Sample Category 1</label>
											</div>
											<!-- always make this div last -->

										</div>
										
										<button class="accordion">
											<span class="w-100 sort-by bold">Price</span>
										</button>
										<div class="panel">

											<div class="row mt-p5">

												<div class="col-5 pr-0">
													<input type="number" id="price-min" class="price-min">
												</div>
												<div class="col-1 p-0">
													<span class="seperator">-</span>
												</div>
												<div class="col-6 pl-0">
													<input type="number" id="price-max" class="price-max">
												</div>

											</div>
											<div class="row mt-p5 mb-1">

												<div class="col-5 pr-0">
													<span class="d-block text-center minmax-text">minimum</span>
												</div>
												<div class="col-1 p-0"></div>
												<div class="col-6 pl-0">
													<span class="d-block text-center minmax-text">maximum</span>
												</div>

											</div>

										</div>
									</div>
									
								</div>

								<div class="row">
									<div class="col-12">
										<div class="border-btm"></div>
									</div>
								</div>

								<div class="row mt-1 mb-2">
									<div class="col-7 col-sm-8">
										<button type="button" class="apply-filter-btn">Apply Filter</button>
									</div>
									<div class="col-5 col-sm-4">
										<button type="button" class="reset-btn">Reset</button>
									</div>
								</div>

							</div>
							
						</div>

					</div>
					
				</div>

			</div>
			
		
		</div>

		<script type="text/javascript">

			// Get the modal
			var modal = document.getElementById("myModal");

			function openModal() {

				if( $('#myModal').css('display') == 'block' ) {
					modal.style.display = "none";
				} else {
					modal.style.display = "block";
				}

			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}

			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
					} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
					} 
				});
			}

		</script>

	</body>

</html>