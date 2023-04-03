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

		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
			
	<title>Point of Sales</title>
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
				<span>Dashboard</span>
			</div>
<?php

include('sidebar.php');




?>


			<div class="table-top-container">
			    
<style>
    /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;

  		font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
}


.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #0A2558;
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 60px;
}
.sidebar .logo-details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
  background: #081D45;
}
.sidebar .nav-links li a:hover{
  background: #081D45;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section{
  position: relative;

  min-height: 30vh;

  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px);
  left: 7px;
}
.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 7px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
}
.home-section nav .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
nav .search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative;
  padding-top: 44px;
}
.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  display: flex;
  align-items: center;
  justify-content: center;
  width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.home-content .box .cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li{
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button{
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
  background:  #0d3073;
}

/* Right box */
.home-content .sales-boxes .top-sales{
  width: 35%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px 0 0;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.sales-boxes .top-sales li{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.sales-boxes .top-sales li a img{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.sales-boxes .top-sales li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sales-boxes .top-sales li .product,
.price{
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar{
    width: 60px;
  }
  .sidebar.active{
    width: 220px;
  }
  .home-section{

    left: 10px;
  }
  .sidebar.active ~ .home-section{
    /* width: calc(100% - 220px); */
    overflow: hidden;
    left: 220px;
  }
  .home-section nav{
    width: calc(100% - 60px);
    left: 7px;
  }
  .sidebar.active ~ .home-section nav{
    width: calc(100% - 220px);
    left: 220px;
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes{
    flex-direction: column;
  }
  .home-content .sales-boxes .box{
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .top-sales{
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box{
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i{
    display: none;
  }
  .home-section nav .profile-details{
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details{
    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box{
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details{
    display: none;
  }
}

    
</style>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <section class="home-section">


    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
              
              					    	<?php
              					    	$date=date("Y-m-d H:i");
 
              					    				    	$co2m=$rowuser['id_number'];	
              					    	
              					    	$query2=mysqli_query($con,"select * from   pending_points where sponsor='$co2m' and date_collected='' and status='1'")or die(mysqli_error());
while($row2=mysqli_fetch_array($query2)){
    $point=$row2['points'];
 	mysqli_query($con,"update pending_points set date_collected='$date' where sponsor='$co2m'")or die(mysqli_error());
 	
 	 	mysqli_query($con,"update user set points=points+'$point' where id_number='$co2m'")or die(mysqli_error());
    
}
              					    	

$com=$_GET['login'];

$query=mysqli_query($con,"select sum(total) as gt from  sales_crm where store='$com' ")or die(mysqli_error());
$row=mysqli_fetch_array($query);



?>
              
              
            <div class="box-topic">Total CRM Sales</div>
            <div class="number"><?php echo number_format($row['gt'],2);?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">All Transaction</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
                      
              					    	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select sum(grand_total) as gt from  sales where added_by='$com' ")or die(mysqli_error());
$row=mysqli_fetch_array($query);



?>
        
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total POS Sales</div>
            <div class="number"><?php echo number_format($row['gt'],2);?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">All Transaction</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">My Points</div>
            <div class="number"><?php echo $rowuser['points'];?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">All Transaction</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">0</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">All Transaction</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

    <!--  <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
             
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
            <li><a href="#">Martin Paw</a></li>
            <li><a href="#">Doe Alex</a></li>
            <li><a href="#">Aiana Lexa</a></li>
            <li><a href="#">Rexel Mags</a></li>
             <li><a href="#">Tiana Loths</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
             <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li>
             <li><a href="#">$23.53</a></li>
             <li><a href="#">$46.52</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Seling Product</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
             
              <span class="product">Vuitton Sunglasses</span>
            </a>
            <span class="price">$1107</span>
          </li>
          <li>
            <a href="#">

              <span class="product">Hourglass Jeans </span>
            </a>
            <span class="price">$1567</span>
          </li>
          <li>
            <a href="#">
           
              <span class="product">Nike Sport Shoe</span>
            </a>
            <span class="price">$1234</span>
          </li>
          <li>
            <a href="#">

              <span class="product">Hermes Silk Scarves.</span>
            </a>
            <span class="price">$2312</span>
          </li>
          <li>
            <a href="#">

              <span class="product">Succi Ladies Bag</span>
            </a>
            <span class="price">$1456</span>
          </li>
          <li>
            <a href="#">

              <span class="product">Gucci Womens's Bags</span>
            </a>
            <span class="price">$2345</span>
          <li>
            <a href="#">

              <span class="product">Addidas Running Shoe</span>
            </a>
            <span class="price">$2345</span>
          </li>
<li>
            <a href="#">

              <span class="product">Bilack Wear's Shirt</span>
            </a>
            <span class="price">$1245</span>
          </li>
          </ul>
        </div>
      </div>-->
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>


			    
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