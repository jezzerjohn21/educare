<?php
include('head.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
		<title>Loyaleadsta</title>
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
				--web-view-name: [T] 15.A. POS_Inventory;
				--web-view-id: T_15A_POS_Inventory;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_15A_POS_Inventory;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_15A_POS_Inventory {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(246,255,246,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 15.A. POS_Inventory;
				--web-view-id: T_15A_POS_Inventory;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1637_cm {
				fill: url(#Rectangle_1637_cm);
			}
			.Rectangle_1637_cm {
				width: 100%;
				height: 100px;
			}
			#Inventory {
				left: 0;
				right: 0;
				top: 33px;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 113px;
				white-space: nowrap;
				line-height: 33px;
				text-align: center;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: bold;
				font-size: 24px;
				color: rgba(255,255,255,1);
			}
			#Component_621__30 {
				position: absolute;
				width: 45px;
				height: 44px;
				left: 3.6%;
				top: 29px;
				overflow: visible;
			}
			.Rectangle_1818 {
				position: absolute;
				overflow: visible;
				width: 45px;
				height: 44px;
				left: 0px;
				top: 0px;
			}
			#Rectangle_1818 {
				fill: rgba(2,106,37,1);
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
			.h-100 {
				height: 100%;
			}
			.mt-1 {
				margin-top: 1rem;
			}
			.border-bottom {
				border-bottom: 1px solid rgba(155,155,155,1);
			}
			nav {
				position: absolute;
				top: 40px;
				left: 4%;
			}
			#menuToggle {
				display: block;
				position: relative;
				top: 4%;
				left: 4%;
				z-index: 1;
				-webkit-user-select: none;
				user-select: none;
			}
			#menuToggle a {
				text-decoration: none;
				color: #232323;
				
				transition: color 0.3s ease;
			}

			#menuToggle input {
				display: block;
				width: 40px;
				height: 32px;
				position: absolute;
				top: -7px;
				left: -5px;
				cursor: pointer;
				opacity: 0; /* hide this */
				z-index: 2; /* and place it over the hamburger */
				-webkit-touch-callout: none;
			}

			#menuToggle span {
				display: block;
				width: 33px;
				height: 4px;
				margin-bottom: 5px;
				position: relative;
				background: rgba(255,255,255,1);
				border-radius: 3px;
				z-index: 1;
				transform-origin: 4px 0px;
				transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
							background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
							opacity 0.55s ease;
			}

			#menuToggle span:first-child {
				transform-origin: 0% 0%;
			}

			#menuToggle span:nth-last-child(2) {
			 	transform-origin: 0% 100%;
			}

			#menuToggle input:checked ~ span {
				opacity: 1;
				transform: rotate(45deg) translate(3px, -3px);
				background: rgba(255,255,255,1);
			}

			#menuToggle input:checked ~ span:nth-last-child(3) {
				opacity: 0;
				transform: rotate(0deg) scale(0.2, 0.2);
			}

			#menuToggle input:checked ~ span:nth-last-child(2) {
				 transform: rotate(-45deg) translate(3px, 5px);
			}

			#menu {
				position: absolute;
				width: 350px;
				height: auto;
				/* height: 137vh; */
				/* margin: 33px 0 0 -59px; */
				margin: 33px 0 0 -250%;
				padding-bottom: 50px;
				background: white;
				list-style-type: none;
				-webkit-font-smoothing: antialiased;
				box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
				transform-origin: 0% 0%;
				transform: translate(-100%, 0);
				transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
			}

			#menu li {
				padding: 10px 2.5rem;
				font-size: 20px;
				font-family: "Inter-SemiBold";
				margin-bottom: .5rem;
			}

			#menu li i {
				color: rgba(4,115,41,1);
				font-size: 17px;
			}

			#menuToggle input:checked ~ ul {
				transform: none;
			}

			.nav ul ul ul {
				top: 0;
				left: 160px; /* same value with line 28 */
			}

			#menu li label {
				cursor: pointer;
			}

			#menu input {
				display: none;
			}

			#menu :checked+.submenu {
				display: block;
				max-height: 300px;
				margin-top: 1rem;
			}

			#menu .submenu {
				list-style: none;
			} 

			.submenu {
				overflow: hidden;
				max-height: 0;
				-webkit-transition: all 0.5s ease-out;
			}

			.submenu li {
				margin-bottom: 0 !important;
			}

			.pb-0 {
				padding-bottom: 0 !important;
			}
			.user-info-container {
				padding: 2rem 2.5rem;
			}

			.next-list {
				border-top: 2px solid rgba(211,211,211,1);
				margin-top: 2rem;
				margin-bottom: 2rem;
			}
			.user-img {
				border-radius: 50%;
				width: 60px;
			}
			.sidebar-username {
				padding-top: 4px;
				font-size: 22px;
				font-family: "Inter-SemiBold";
			}
			.sidebar-my-account {
				font-size: 17px;
				font-family: "Inter-Regular";
			}
			
			
			.table-container {
				width: 100%;
				height: auto;
				padding: 1rem 3.5rem;
			}
			.table-top-container {
				width: 100%;
				height: 70px;
				background-color: white;
				margin-top: -4px;
				position: absolute;
			}
			.active {
				font-weight: bold;
				color: rgba(40,155,42,1);
				border-radius: 20px;
				background-color: rgba(226,255,226,1);
				padding: .5rem 1.5rem;
			}
			.inactive {
				font-weight: bold;
				color: rgba(134,138,134,1);
				border-radius: 20px;
				background-color: rgba(231,231,231,1);
				padding: .5rem 1rem;
			}
			#table_inventory {
				box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
				overflow-x: auto;
			}
			table {
				font-size: 15px;
				font-family: "Inter-SemiBold";
			}
			table th {
				font-size: 15px;
				font-family: "Inter-SemiBold";
				color: rgba(134,138,134,1);
				background-color: rgba(231,231,231,1);
				font-weight: 100 !important;
				min-width: 90px !important;
			}
			table th:first-child {
				border-top-left-radius: 8px;
			}
			table th:last-child {
				border-top-right-radius: 8px;
			}
			table.dataTable tbody td {
				font-family: "Inter-Regular";
				font-weight: 500;
				min-width: 90px !important;
				padding: 1.5rem 10px !important;
			}
			table.dataTable>tbody>tr.child ul.dtr-details>li {
				padding: 1em 0;
			}
			.dataTables_wrapper .dataTables_length {
				padding-bottom: 3rem;
			}
			.dataTables_wrapper .dataTables_filter {
				padding-right: 100px;
			}
			.add-btn {
				cursor: pointer;
				font-size: 15px;
				font-family: "Inter-SemiBold";
				color: white;
				background-color: rgba(40,155,42,1);
				width: 86px;
				height: 40px;
				border-radius: 8px;
				position: absolute;
				top: 112px;
				right: 55px;
				z-index: 2;
			}
			.dataTables_wrapper .dataTables_paginate {
				text-align: center !important;
				float: none !important;
				padding-top: 1rem !important;
			}
			.dataTables_wrapper .dataTables_info {
				font-size: 15px;
				font-family: "Inter-Regular";
				text-align: center;
				float: none !important;
				position: absolute;
				left: 47.1%;
				padding-top: 24px;
			}
			.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
				background-color: rgba(231,231,231,1) !important;
				color: black;
			}
			.dataTables_wrapper .dataTables_paginate .paginate_button {
				background-color: rgba(40,155,42,1);
				color: white !important;
				border-radius: 8px;
				margin: 0 3.5rem;
			}
			.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
				background: rgba(40,155,42,1) !important;
				border: 0;
			}
			.order_id {
				color: rgba(40,155,42,1);
			}
			table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control {
				padding-left: 33px !important;
			}
			.filter_by, .select2-container, .selection, .select2-container--default .select2-selection--single, #table_inventory_mobile {
				display: none;
			}
			.dataTables_wrapper .dataTables_length select {
				border: unset !important;
			}
			.dataTables_length, .dataTables_wrapper .dataTables_filter input {
				font-size: 15px;
				font-family: "Inter-Regular";
			}
			.menu-container {
				height: 137vh;
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

			@media (min-width: 1800px) {
				#Component_621__30 {
					left: 3.8% !important;
				}
			}
			/* tablet */
			@media (min-width: 760px) and (max-width: 1023px) {
				.table-container {
					padding: 1.5rem 1rem !important;
				}
				nav {
					left: 4.2% !important;
					top: 34px !important;
				}
				.dataTables_wrapper .dataTables_info {
					left: 44.5% !important;
				}
				.table-top-container {
					height: 80px !important;
				}
				.add-btn {
					top: 121px !important;
					right: 18px !important;
				}
				#table_inventory {
					font-size: 13px !important;
				}
				#Component_621__30 {
					top: 24px !important;
				}
				#menu {
					margin: 39px 0 0 -54px !important;
				}
				#menu li {
					padding: 10px 3.5rem;
					font-size: 18px !important;
				}
				.user-info-container {
					padding: 2rem 3.5rem;
				}
				.sidebar-username {
					font-size: 20px !important;
				}
				.sidebar-my-account {
					font-size: 16px !important;
				}
				.menu-container {
					height: 200vh;
				}
			}

			/* phones */
			@media (max-width: 575px){
				.table-container {
					padding: 1.5rem 1rem !important;
				}
				nav {
					left: 5% !important;
				}
				.dataTables_wrapper .dataTables_info {
					left: 38% !important;
					padding-top: 32px !important;
				}
				.dataTables_wrapper .dataTables_length {
					padding-top: 2rem !important;
					padding-bottom: 2rem !important;
					text-align: right;
				}
				.dataTables_wrapper .dataTables_filter {
					position: absolute !important;
					top: -35px !important;
				}
				.table-top-container {
					height: 130px !important;
				}
				.add-btn {
					right: 15px !important;
				}
				#table_inventory {
					display: none;
				}
				#table_inventory_mobile thead {
					display: none;
				}
				#table_inventory_mobile {
					display: block !important;
					font-size: 14px;
					font-family: "Inter-SemiBold";
					border-collapse: separate;
					border-spacing: 0 15px;
				}
				.per-inv-product-container {
					background-color: white;
					box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
					padding: 1.5rem !important;
					width: 50%;
					height: auto;
				}
				.sku-inv {
					font-weight: bold;
				}
				table.dataTable.no-footer {
					border-bottom: unset;
				}
				table.dataTable tbody tr {
					margin-bottom: 1rem;
				}
				.separator{
					height: 20px;
				}
				td {
					padding: 5px;
				}
				#sortBy {
					z-index: 2;
					width: 35%;
					font-size: 14px;
					font-family: "Inter-SemiBold";
				}
				.filter_by {
					display: block !important;
					z-index: 2;
					position: absolute;
					top: 181px;
					left: 4%;
					font-size: 14px;
					font-family: "Inter-Regular";
				}
				.selection, .select2-container {
					display: inline-block !important;
				}
				.select2-container--default .select2-selection--single {
					display: block !important;
					z-index: 2;
					border: unset;
					position: absolute;
					top: 72px;
					left: 76px;
				}
				.select2-dropdown {
					top: 88px !important;
					left: 76px !important;
				}
				#menu {
					width: 310px !important;
				    margin: 33px 0 0 -21px !important;
				}
				#menuToggle {
					z-index: 3;
				}
				.user-info-container {
					padding: 2rem 1.5rem !important;
				}
				#menu li {
					padding: 10px 2rem;
					font-size: 17px !important;
				}
				.menu-container {
					height: 300vh;
				}
				.sidebar-username {
					font-size: 19px !important;
				}
				.sidebar-my-account {
					font-size: 15px !important;
				}
			}

		</style>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

	</head>
	<body>
		<div id="T_15A_POS_Inventory">
		    			<svg class="Rectangle_1637_cm">
				<linearGradient id="Rectangle_1637_cm" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_cm" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Inventory">
				<span>Point of Sales</span>
			</div>
<?php

include('side.php');
?>


			<div class="table-top-container"></div>
			
			        
 
			
		

		

			<div class="table-container">

				<!-- start- this table is hidden if the size is for mobile screen -->
				<table id="table_inventory" class="row-border text-center" style="width:100%;">
					<thead>
						<tr>
							<th>Invoice ID</th>
							<th>Customer Name</th>
							<th>Total Amount</th>
							<th>Cash</th>
							<th>Change</th>
							<th>Balance</th>
							<th>Payment Option</th>
							<th>Credit Terms</th>
						
							<th>Cashier</th>
						
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					    
					    	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select * from  sales where cust_id='$com' order by id asc")or die(mysqli_error());
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
					    
					    
					    
					    
					    
					    
					    
					    
						<tr>
							<td class="text-center">
								<a href="edit_prod.php?id=<?php echo $row['id'];?>&login=<?php echo $_GET['login'];?>"  class="order_id"><?php echo $row['invoice']?></a> <!--Order ID-->
							</td>
							
							
						 <td>Walk-In</td>


							<td>₱  <?php echo number_format($row['grand_total'],2)?></td> <!--Price-->
							
							
	<td>₱  <?php echo number_format($row['amount'],2)?></td> <!--Price-->
	
	
					<td>₱  <?php echo number_format($row['change_amount'],2)?></td> <!--Price-->
					
					
				<td>₱  <?php echo number_format($row['balance'],2)?></td> <!--Price-->
				
					 <td><?php echo $row['payment_option']?></td>
		
										 <td><?php echo $row['no_month']?>Days</td>
		
							     <td><?php echo $rowcateg2['firstname']?> <?php echo $rowcateg2['lastname']?></td>   
							     
						       
                    
                     
							<td class="text-center"><span class="active"><?php echo $row['status']?></span></td> <!--Status-->
							
							
							
						</tr>
						
						<?php
						
}
						?>
				
					</tbody>
				</table>
				<!-- end- this table is hidden if the size is for mobile screen -->

				<!-- start- this table is hidden if the size is not for mobile screen -->
				<table id="table_inventory_mobile" class="nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Order ID</th>
							<th>Name</th>
							<th>SKU</th>
							<th>Category</th>
							<th>Unit</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Threshold</th>
							<th>Points</th>
							<th>Added on</th>
							<th>Added by</th>
							<th>Updated on</th>
							<th>Updated by</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					    
					    
					    					    	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select * from  sales where added_by='$com' order by id asc")or die(mysqli_error());
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
					    
					    
					    
								    
						<tr>
							<td class="per-inv-product-container">
								<div class="row">
									<div class="col-6">
									<a href="edit_prod.php?id=<?php echo $row['id'];?>&login=<?php echo $_GET['login'];?>"  class="order_id"><?php echo $row['invoice']?></a> <!--Order ID-->
									</div>
									<div class="col-4">
										<span class="active">Walk-in</span>
									</div>
								</div>
								<div class="row mt-1">
									<div class="col-12">
										<span class="d-block border-bottom"></span>
									</div>
								</div>
								<div class="row mt-1">
									<div class="col-6">
										<span class="name-inv">₱  <?php echo number_format($row['grand_total'],2)?></span>
									</div>
									<div class="col-6">
										<span class="category-inv">₱  <?php echo number_format($row['amount'],2)?></span>
									</div>
								</div>
								<div class="row mt-p5">
									<div class="col-6">
										<span class="quantity-inv">₱  <?php echo number_format($row['change_amount'],2)?></span>
									</div>
									<div class="col-6">
										<span class="threshold-inv">₱  <?php echo number_format($row['balance'],2)?></span>
									</div>
								</div>
								<div class="row mt-p5">
									<div class="col-6">
										<span class="price-kilo-inv"><?php echo $row['payment_option']?></span>
									</div>
									<div class="col-6">
										<span class="points-inv"><?php echo $row['no_month']?>Days</span>
									</div>
								</div>
								
										<div class="row mt-p5">
									<div class="col-6">
										<span class="price-kilo-inv"<?php echo $rowcateg2['firstname']?> <?php echo $rowcateg2['lastname']?></span>
									</div>
									<div class="col-6">
										<span class="points-inv"><?php echo $row['status']?></span>
									</div>
								</div>
								
							</td>
							<!-- start-> hidden td part pero need padin lagyan ng data for sorting -->
							<td>Sample1</td> <!--Name-->
							<td>UGG-BB-_PUR-01</td> <!--SKU-->
							<td>Fruits</td> <!--Category-->
							<td>karton</td> <!--Unit-->
							<td>₱ 50.00</td> <!--Price-->
							<td>9999</td> <!--Quantity-->
							<td>9999</td> <!--Threshold-->
							<td>50</td> <!--Points-->
							<td>08/30/2021</td> <!--Added On-->
							<td>Joey Tribbiani</td> <!--Added By-->
							<td>08/30/2021</td> <!--Updated On-->
							<td>Joey Tribbiani</td> <!--Updated By-->
							<td>ACTIVE</td> <!--Status-->
							<!-- end-> hidden td part pero need padin lagyan ng data for sorting -->
						</tr>
					<?php
					
}
					?>
					
					
					
					</tbody>
					
				</table>
				<!-- end- this table is hidden if the size is not for mobile screen -->

			</div>

		</div>

		<script type="text/javascript">

			$(document).ready( function () {
				$("select").select2();

				if (window.matchMedia("(max-width: 767px)").matches)  {

					$('#table_inventory').DataTable().clear().draw();
					$('#table_inventory').DataTable().destroy();

					var tableInventoryMobile = $('#table_inventory_mobile').DataTable( {
						"pagingType": "simple",
						"Sort":false,
						language: {
							'paginate': {
								'previous': '<span class="fa fa-chevron-left"></span>',
								'next': '<span class="fa fa-chevron-right"></span>'
							},
							search: "", searchPlaceholder: "Search",
							"lengthMenu": "Showing _MENU_ "
						},
						"infoCallback": function( settings, start, end, max, total, pre ) {
							var api = this.api();
							var pageInfo = api.page.info();
						
							return 'Page '+ (pageInfo.page+1) +' of '+ pageInfo.pages;
						},
						columns:[
							{ visible: true }, //col 1
							{ visible: false }, //col 2
							{ visible: false }, //col 3
							{ visible: false }, //col 4
							{ visible: false }, //col 5
							{ visible: false }, //col 6 
							{ visible: false }, //col 7
							{ visible: false }, //col 8 
							{ visible: false }, //col 9
							{ visible: false },  //col 10 
							{ visible: false },  //col 11 
							{ visible: false },  //col 12 
							{ visible: false },  //col 13 
							{ visible: false },  //col 14 
						]
					} );

					$("#sortBy").change(function () {
						var sortByData = $('#sortBy').val(),
							arr = sortByData.split("_");

						tableInventoryMobile.order([arr[0], arr[1]]).draw();
					});

				} else {
					
					$('#table_inventory_mobile').DataTable().clear().draw();
					$('#table_inventory_mobile').DataTable().destroy();

					var table_inventory = $('#table_inventory').DataTable( {
						fixedHeader: true,
						"scrollX": true,
						"pagingType": "simple",
						language: {
							'paginate': {
								'previous': '<span class="fa fa-chevron-left"></span>',
								'next': '<span class="fa fa-chevron-right"></span>'
							},
							search: "", searchPlaceholder: "Search",
							"lengthMenu": "Showing _MENU_ "
						},
						"infoCallback": function( settings, start, end, max, total, pre ) {
							var api = this.api();
							var pageInfo = api.page.info();
						
							return 'Page '+ (pageInfo.page+1) +' of '+ pageInfo.pages;
						},
					} );

				}
				
			} );

		</script>

	</body>
</html>