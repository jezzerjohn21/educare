


   <?php
     include('../dist/dbcon.php');

session_start();
date_default_timezone_set("Asia/Manila"); 

if($_GET['login']==""){
    ?>
    

	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='logout.php?login=';
    }, 1000);
</script>
<?php
    
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
				--web-view-name: [T] 09.A. POS_Billing;
				--web-view-id: T_09A_POS_Billing;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_09A_POS_Billing;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
				font-family: "Inter-SemiBold";
				
			}
			#T_09A_POS_Billing {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(248,248,248,1);
				overflow-y: scroll;
				overflow-x: hidden;
				--web-view-name: [T] 09.A. POS_Billing;
				--web-view-id: T_09A_POS_Billing;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Rectangle_1911 {
				fill: rgba(255,255,255,1);
			}
			.Rectangle_1911 {
				position: absolute;
				overflow: visible;
				width: 100%;
				height: 100%;
				left: 0;
				top: 0;
				z-index: 1;
			}
			#Rectangle_1637_bs {
				fill: url(#Rectangle_1637_bs);
			}
			.Rectangle_1637_bs {
				width: 100%;
				height: 100px;
			}
			#Billing {
				left: 0;
				right: 0;
				top: 5%;
				margin: 0 auto;
				position: absolute;
				overflow: visible;
				width: 73px;
				white-space: nowrap;
				line-height: 33px;
				text-align: center;
				font-style: normal;
				font-family: "Inter-SemiBold";
				font-weight: bold;
				font-size: 24px;
				color: rgba(255,255,255,1);
			}
			#Component_621__20 {
				position: absolute;
				width: 45px;
				height: 44px;
				left: 3.6%;
				top: 29px;
				overflow: visible;
			}
			#Rectangle_1818 {
				fill: rgba(2,106,37,1);
			}
			.Rectangle_1818 {
				position: absolute;
				overflow: visible;
				width: 45px;
				height: 44px;
				left: 0px;
				top: 0px;
			}
			#Group_2038 {
				mix-blend-mode: normal;
				position: absolute;
				width: 17.6px;
				height: 14px;
				left: 13.699px;
				top: 15px;
				overflow: visible;
			}
			#Group_1907 {
				position: absolute;
				width: 17.6px;
				height: 1px;
				left: 0px;
				top: 7px;
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
				width: 19.6px;
				height: 2px;
				left: 0px;
				top: 0px;
				transform: matrix(1,0,0,1,0,0);
			}
			#Group_2036 {
				position: absolute;
				width: 17.6px;
				height: 1px;
				left: 0px;
				top: 0px;
				overflow: visible;
			}
			#Path_1144_b {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: miter;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Path_1144_b {
				overflow: visible;
				position: absolute;
				width: 19.6px;
				height: 2px;
				left: 0px;
				top: 0px;
				transform: matrix(1,0,0,1,0,0);
			}
			#Group_2037 {
				position: absolute;
				width: 17.6px;
				height: 1px;
				left: 0px;
				top: 14px;
				overflow: visible;
			}
			#Path_1144_ca {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: miter;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Path_1144_ca {
				overflow: visible;
				position: absolute;
				width: 19.6px;
				height: 2px;
				left: 0px;
				top: 0px;
				transform: matrix(1,0,0,1,0,0);
			}
			#search {
				white-space: nowrap;
				line-height: 40px;
				text-align: left;
				font-style: normal;
				font-weight: normal;
				font-size: 15px;
				color: rgba(85,85,85,1);
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
			.m-0 {
				margin: 0 !important;
			}
			.mt-1 {
				margin-top: 1rem !important;
			}
			.mt-2 {
				margin-top: 2rem !important;
			}
			.mt-3 {
				margin-top: 3rem !important;
			}
			.mb-1 {
				margin-bottom: 1rem;
			}
			.mb-2 {
				margin-bottom: 2rem;
			}
			.mb-3 {
				margin-bottom: 3rem;
			}
			.mb-5 {
				margin-bottom: 5rem;
			}
			.ml-05 {
				margin-left: .5rem;
			}
			.ml-1 {
				margin-left: 1rem;
			}
			.ml-2 {
				margin-left: 2rem;
			}
			.mr-2 {
				margin-right: 2rem;
			}
			.pl-0 {
				padding-left: 0;
			}
			.pl-2 {
				padding-left: 2rem !important;
			}
			.pr-0 {
				padding-right: 0;
			}
			.pr-1 {
				padding-right: 1rem  !important;
			}
			.pr-2 {
				padding-right: 2rem  !important;
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
			.wrapper-auto {
				height: auto;
				display: flex;
				align-items: center;
			}
			.sticky {
				position: sticky;
			}
			.z-index-100 {
				z-index: 100;
			}
			.pad-0 {
				padding: 0;
			}
			.bg-white {
				background-color: white !important;
			}
			.gray {
				color: rgba(155,155,155,1);
			}
			.select_color {
				color: rgba(150,150,150,1);
				text-decoration: none;
			}
			.mobile-view {
				display: none;
			}
			.big-screen-view {
				display: block;
			}
			.form-container {
				width: 100%;
				display: block;
				margin-top: 1rem;
				margin-bottom: 2rem;
			}
			.search-container {
				width: 80%;
				display: block;
				margin: 0 auto;
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
			.product-container {
				width: 80%;
				height: 900px;
				display: block;
				margin: 0 auto;
				overflow-y: auto;
				overflow-x: hidden;
				margin-top: 1rem !important;

			}
			.single-product-container {
				margin-top: 0.75rem !important;
				border: 2px solid #d3d3d369;
				border-radius: 8px;
				height: auto;
				width: 100%;
				background-color: white;
			}
			#product-image {
				width: 100%;
				height:100px;
				margin-top:2px;
				border-top-left-radius: 8px;
				border-top-right-radius: 8px;
				object-fit: scale-down;
			}
			#product-name {
				width: fit-content;
				margin-top: 1rem;
				margin-left: 15px;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 15px;
				color: rgba(34,34,34,1);
				letter-spacing: -0.2px;
			}
			#price-and-type {
				width: fit-content;
				margin-top: 3px;
				margin-left: 15px;
				text-align: left;
				font-family: "Inter-SemiBold";
				font-style: normal;
				font-weight: normal;
				font-size: 13px;
				color: rgba(136,136,136,1);
			}
			.remain-stock-container {
				height: 45px;
				width: 45px;
				border-radius: 8px;
				text-align: center;
				margin: 16px 16px 16px 0px;
			}
			.remain-stock-container button {
				background-color: rgba(226,255,226,1);
				height: 45px;
    			width: 45px;
				display: table-cell;
    			vertical-align: middle;
				color: rgba(0,133,63,1);
				border-radius: 8px;
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
			#Group_2058 {
				margin: 18px 18px 18px 50px;
				width: 124px;
				height: 19px;
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
			.product-billed-container {
			
				width: 100%;
				overflow-y: auto;
    			overflow-x: hidden;
				padding: 0 2rem 2rem 2rem;
			}
			.discount-container {
				padding-left: 2rem;
				padding-right: 2rem;
				height: 47px;
				width: 100%;
				border-top: 2px solid rgba(211,211,211,1);
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			.rebate-container {
				padding-left: 2rem;
				padding-right: 2rem;
				height: 47px;
				width: 100%;
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			.reward-container {
				padding-left: 2rem;
				padding-right: 2rem;
				height: 47px;
				width: 100%;
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			.total-amount-container {
				padding-left: 2rem;
				padding-right: 2rem;
				height: auto;
				width: 100%;
			}
			.proceed-to-checkout-btn {
				background-color: rgba(40,155,42,1);
				color: white;
				height: 56px;
				width: 100%;
				border-radius: 8px;
				cursor: pointer;
				font-family: "Inter-SemiBold";
				font-weight: bold;
				font-size: 18px;
				margin: 0 auto;
				margin-top: 1rem !important;
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
				font-size: 20px;
				color: rgba(40,155,42,1);
			}

			.f-13 {
				font-size: 15px;
			}

			.f-20 {
				font-size: 20px;
			}
			.bold {
				font-weight: bold;
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
			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 1; /* Sit on top */
				padding-top: 100px; /* Location of the box */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow-y: scroll;
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
				padding: 0;
				border: 1px solid #888;
				width: 60%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animatetop;
				-webkit-animation-duration: 0.4s;
				animation-name: animatetop;
				animation-duration: 0.4s;
				border-radius: 8px;
			}

			/* Add Animation */
			@-webkit-keyframes animatetop {
				from {top:-300px; opacity:0} 
				to {top:0; opacity:1}
			}

			@keyframes animatetop {
				from {top:-300px; opacity:0}
				to {top:0; opacity:1}
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
			.cancel {
				background-color: white;
				color: rgba(0, 0, 0, 0.486);
				cursor: pointer;
				border-radius: 8px;
				width: 80%;
				height: 56px;
				font-size: 17px;
				text-align: center;
				font-style: normal;
				font-weight: bold;
				margin: 0 auto;
    			display: block;
				border: 1px solid rgba(0, 0, 0, 0.075);
				margin-bottom: 1rem;
			}
			#Submit {
				width: 80%;
				height: 56px;
				text-align: center;
				font-style: normal;
				font-weight: bold;
				font-size: 17px;
				color: white;
				background-color: rgba(40,155,42,1);
				border-radius: 8px;
				cursor: pointer;
				margin: 0 auto;
   			 	display: block;
			}

			input,
			textarea {
				border: 1px solid #eeeeee;
				box-sizing: border-box;
				margin: 0;
				outline: none;
				padding: 10px;
			}

			input[type="button"] {
				-webkit-appearance: button;
				cursor: pointer;
			}

			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
				-webkit-appearance: none;
			}

			.input-group {
				clear: both;
				margin: 0 auto;
				position: relative;
				width: 80%;
				background-color: #eeeeee;
				border-radius: 8px;
				height: 60px;
			}

			.input-group input[type='button'] {
				background-color: rgba(226,255,226,1);
				min-width: 50px;
				width: auto;
				transition: all 300ms ease;
				border-radius: 8px;
				/* margin-top: 4px;
				margin-left: 8px; */
				right: 0
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
				margin-left: 8px;
			}
			.button-plus {
				margin-left: 12px;
			}

			.input-group .quantity-field {
				position: relative;
				height: 45px;
				text-align: center;
				width: 58%;
				display: inline-block;
				font-size: 20px;
				margin: 0 0 5px;
				resize: vertical;
				background-color: #eeeeee;
				border: 0;
				margin-top: 6px !important;
			}

			input[type="number"] {
				-moz-appearance: textfield;
				-webkit-appearance: none;
			}

			button {
				cursor: pointer;
			}
			.menu-container {
				height: 150vh;
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
				margin: 33px 0 0 -200%;
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
			/* new changes */
			.total-discount-selected {
				color: rgba(189,161,2,1);
				font-size: 15px;
				font-family: "Inter-SemiBold";
			}
			.discount-selected-container {
				background-color: rgba(255,250,224,1);
				padding: 7px;
				border-radius: 8px;
			}
			.total-rebate-selected {
				color: rgba(234,142,37,1);
				font-size: 15px;
				font-family: "Inter-SemiBold";
			}
			.rebate-selected-container {
				background-color: rgba(255,231,204,1);
				padding: 7px;
				border-radius: 8px;
			}
			.total-reward-selected {
				color: rgba(209,63,40,1);
				font-size: 15px;
				font-family: "Inter-SemiBold";
			}
			.reward-selected-container {
				background-color: rgba(255,234,231,1);
				padding: 7px;
				border-radius: 8px;
			}
			.d-none {
				display: none;
			}
			.d-block {
				display: block;
			}
			/* new changes */

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

			@media (min-width: 1800px) {
				#Component_621__30 {
					left: 3.8% !important;
				}
			}

			@media (min-width: 1344px) and (max-width: 1355px) {
				.menu-container {
					height: 129vh;
				}
			}

			@media (min-width: 1340px) and (max-width: 1343px) {
				.menu-container {
					height: 168vh;
				}
			}

			@media (min-width: 1077px) and (max-width: 1280px) {
				.input-group .quantity-field {
					width: 51% !important;
				}
				.input-group input[type='button'] {
					min-width: 46px !important; 
				}
			}

			@media (min-width: 1024px) and (max-width: 1076px) {
				.input-group .quantity-field {
					width: 50% !important;
				}
				.input-group input[type='button'] {
					min-width: 40px !important; 
				}
				.pl-0 { padding-left: 0;}
				#menu {
					margin: 33px 0 0 -175% !important;
				}
			}

			@media (min-width: 1024px) and (max-width: 1339px) {
				.menu-container {
					height: 173vh;
				}
			}

			@media (min-width: 759px) and (max-width: 10243x) {
				.menu-container {
					height: 170vh;
				}
			}

			/* tablet */
			@media (min-width: 760px) and (max-width: 1023px) {
				.f-13 {
					font-size: 13px;
				}
				.p-0 {
					padding-right: 0;
				}
				.pl-0 {
					padding-left: 0;
				}
				.pr-0 {
					padding-right: 0;
				}
				::-webkit-scrollbar {
					width: 5px;
					height: 2em;
				}
				.Rectangle_1637_bs {
					height: 75px;
				}
				#Component_621__20 {
					top: 2.5%;
				}
				#Billing {
					top: 3.5%;
				}
				.search-container, .product-container {
					width: 95%;
				}
				.product-container, .single-product-container {
					margin-top: 0.5rem !important;
				}
				.product-billed-container {
					padding: 0 0.5rem 2rem 1rem;
				}
				.remain-stock-container {
					font-size: 15px;
				}
				#product-name {
					font-size: 14px;
				}
				#price-and-type {
					font-size: 12px;
				}
				.users-button {
					margin: 8px 25px 8px 8px;
				}
				#Group_2058 {
					margin: 18px 18px 18px 25px;
				}
				.discount-container, .rebate-container, .reward-container, .total-amount-container {
					padding-left: 1rem;
					padding-right: 1rem;
				}
				.tablet-pad-r-0 {
					padding-right: 0;
				}
				.modal-content {
					width: 87% !important;
				}
				.input-group .quantity-field {
					width: 50% !important;
				}
				nav {
					left: 4.2% !important;
					top: 25px !important;
				}
				#menu {
					margin: 23px 0 0 -54px !important;
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
			}

			/* phones */
			@media (max-width: 575px){
				.mobile-view {
					display: block;
				}
				.big-screen-view {
					display: none;
				}
				.p-0 {
					padding-right: 0;
				}
				.Rectangle_1637_bs {
					height: 75px;
				}
				#Component_621__20 {
					top: 2.5%;
				}
				#Billing {
					top: 3.5%;
				}
				.product-container {
					height: 700px !important;
				}
				.product-container, .single-product-container {
					margin-top: 0.5rem !important;
				}
				.form-container {
					margin-top: 0 !important;
					margin-bottom: 1rem;
				}
				.user-container {
					margin-bottom: 1rem;
				}
				.search-container i {
					left: 79%;
					top: 80px;
				}
				.search-container, .product-container {
					width: 90%;
				}
				#product-image {
					width: 56px;
					height: 80px;
				}
				#product-name {
					margin-top: 0.5rem;
				}
				#price-and-type {
					margin-bottom: 0.5rem;
				}
				.total-amount-container, .discount-container, .rebate-container, .reward-container {
					padding-right: 1rem;
				}
				.modal-content {
					width: 85% !important;
				}
				.input-group .quantity-field {
					width: 48% !important;
				}
				.proceed-to-checkout-btn {
					margin-bottom: 1rem;
				}
				nav {
					left: 4.8% !important;
					top: 27px !important;
				}
				#menu {
					width: 310px !important;
				    margin: 20px 0 0 -21px !important;
				}
				#menuToggle {
					z-index: 101;
				}
				.user-info-container {
					padding: 2rem 1.5rem !important;
				}
				#menu li {
					padding: 10px 2rem;
					font-size: 17px !important;
				}
				.menu-container {
					height: 200vh;
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

	</head>
	<body onload="clickButton()">

		<div id="T_09A_POS_Billing">
		<svg class="Rectangle_1637_bs">
				<linearGradient id="Rectangle_1637_bs" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_bs" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Billing">
				<span>Summary</span>
			</div>
			<div id="Component_621__20" class="Component_621___20">
				<svg class="Rectangle_1818">
					<rect id="Rectangle_1818" rx="7" ry="7" x="0" y="0" width="45" height="44">
					</rect>
				</svg>
			</div>
			<nav class="nav" role="navigation">
				<div id="menuToggle">
				
					<input type="checkbox" />
					
					<span></span>
					<span></span>
					<span></span>

					<ul id="menu">

						<div class="menu-container">
							<div class="user-info-container">
								<div class="row">
									<div class="col-3">
										<img src="./user-icon.png" class="user-img" alt="user image">
									</div>
										<div class="col-9">
									<p class="sidebar-username d-block"><?php echo $rowuser['firstname'];?></p>
							
							<style>
							    .p1 {
  font-family: "Inter-Regular";
}
							    
							</style>
							
									<p  class="sidebar-my-account "><a class="p1"  href="myaccount.php?login=<?php echo $_GET['login'];;?>">My Account</a></p>
										<p class="sidebar-my-account d-block"><font color="green"><u><?php echo $rowuser['id_number'];?></u></font></p>
								</div>
								</div>
							</div>

											<a href="dashboard.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-tachometer-alt"></i> &ensp; Dashboard</li></a>
						<a href="billing.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-money-check-alt"></i> &nbsp; Billing</li></a>
						<li> 
							<label for="transactions"> <i class="fa fa-receipt"></i> &ensp; Transactions </label><input type="checkbox" id="transactions">
							<ul class="submenu">
						    <a href="pos_transaction.php?login=<?php echo $_GET['login'];?>"><li> POS Transactions</li></a>
							    	    <a href="crm_transaction.php?login=<?php echo $_GET['login'];?>"><li> CRM Transactions</li></a>
							</ul>
						</li>
						<li> 
							<label for="inventory"> <i class="fa fa-box"></i> &ensp; Inventory </label><input type="checkbox" id="inventory">
							<ul class="submenu">
								<a href="product.php?login=<?php echo $_GET['login'];?>"><li> Product</li></a>
								<a href="category.php?login=<?php echo $_GET['login'];?>"><li> Category</li></a>
								<a href="#"><li> Replenishments</li></a>
								<a href="adjustment.php?login=<?php echo $_GET['login'];?>"><li> Adjustments</li></a>
								<a href="transfer.php?login=<?php echo $_GET['login'];?>"><li> Transfers</li></a>
								<a href="return.php?login=<?php echo $_GET['login'];?>"><li class="pb-0"> Returns</li></a>
							</ul>
						</li>
						<a href="discount1.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-tag"></i> &ensp; Discounts</li></a>
						<a href="payment1.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-money-bill"></i> &nbsp; Payments</li></a>
						<a href="quotations1.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-clipboard-list"></i> &ensp; Quotations</li></a>
					
						<li> 
							<label for="incentives"> <i class="fa fa-award"></i> &ensp; Incentives </label><input type="checkbox" id="incentives">
							<ul class="submenu">
								<a href="programs1.php?login=<?php echo $_GET['login'];?>"><li> Programs</li></a>
								<a href="rewards1.php?login=<?php echo $_GET['login'];?>"><li> Rewards</li></a>
								<a href="rebates1.php?login=<?php echo $_GET['login'];?>"><li> Rebates</li></a>
								<a href="referral1.php?login=<?php echo $_GET['login'];?>"><li class="pb-0"> Referrals</li></a>
							</ul>
						</li>

						<div class="next-list"></div>
						
						<a href="logs.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-history"></i> &ensp; Logs</li></a>
						<a href="support.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-cog"></i> &ensp; Support</li></a>
							<a href="logout.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-times"></i> &ensp; Logout</li></a>
						</div>
					</ul>

				</div>
			</nav>
			<div class="row mb-2" style="margin-top: -4px; max-height: 900px;">


	<div class="col-sm-3 col-3 ">
		</div>

				<div class="col-sm-6 col-12 pad-0 bg-white sticky z-index-100 pr-1">

					<div class="user-container ">

						<div class="row">

							<div class="col-6">
<?php

$code=$_GET['invoice'];
$queryqq=mysqli_query($con,"select * from  temp_prod  where invoice='$code'")or die(mysqli_error());
$rowqq=mysqli_fetch_array($queryqq);
    $dis=$rowqq['user_id'];
    
    $query2p2=mysqli_query($con,"select * from  customer  where id='$dis' ")or die(mysqli_error());
    $rowqq2=mysqli_fetch_array($query2p2);

?>
								<div id="Group_2058">
									<div id="user-name-container">
										<span><i class="fa fa-user"></i> &nbsp; <?php echo $rowqq2['firstname'];?> <?php echo $rowqq2['lastname'];?></span>
									</div>
								</div>

							</div>

							<div class="col-6 text-right">

								<button onclick="" class="users-button"><i class="fa fa-users"></i></button>

							</div>

						</div>

					</div>







<script>
function dashboard() {
var query_parameter = document.getElementById("name").value;
var dataString = 'parameter=' + query_parameter;

// AJAX code to execute query and get back to same page with table content without reloading the page.
$.ajax({
type: "POST",
url: "execute_query.php",
data: dataString,
cache: false,
success: function(html) {
// alert(dataString);
document.getElementById("table_content").innerHTML=html;
}
});
return false;
}
</script>











					<div class="product-billed-container f-11 ">










<div id="table_content">
    			   	<?php

$com=$_GET['login'];
$code=$_GET['invoice'];
$queryqq=mysqli_query($con,"select * from  temp_prod  where invoice='$code'")or die(mysqli_error());
while($rowqq=mysqli_fetch_array($queryqq)){ 
    $dis=$rowqq['prod_id'];
    
    $query2p=mysqli_query($con,"select * from  products  where id='$dis' ")or die(mysqli_error());

$row22p=mysqli_fetch_array($query2p);
    
    ?>	
    
    
    
    
    
						<div class="row mt-1">

							<div class="col-sm-3 col-4 pr-0">
								<div class="wrapper">
									<span class="w-100"><?php echo $row22p['prod_name'];?></span>
								</div>
							</div>
							<div class="col-sm-3 col-3  text-center pr-0">
								<div class="wrapper">
									<span class="w-100 gray">₱ <?php echo $row22p['prod_price'];?> / <?php echo $row22p['prod_unit'];?></span>
								</div>
							</div>
							<div class="col-sm-2 col-2 text-center">
								<div class="wrapper">
									<span class="w-100 gray">x<?php echo $rowqq['qty'];?></span>
								</div>
							</div>
							<div class="col-sm-4 col-3 text-right pl-0">
								<div class="wrapper">
									<span class="w-100">₱ <?php echo number_format($row22p['prod_price']*$rowqq['qty'],2);?></span>
								</div>
							</div>

						</div>
    
    
    
    
    <?php
    
}
    ?>
    
    
    
    
</div>












					</div>

					<div class="discount-container">

						<div class="row h-100">

							<div class="col-sm-7 col-7">
								<div class="wrapper">
									<img src="tag_icon.png" width="24" height="24"/>
									<span class="ml-05">Discount</span>
								</div>
							</div>
							
							<?php
							$di=$_GET['login'];
							$querydiscount=mysqli_query($con,"select * from  cart_dis  where invoice_no='$code'")or die(mysqli_error());
$count=mysqli_num_rows($querydiscount);
							?>
							<!-- start - if may napili na discount -->
							<div class="col-sm-4 col-4 text-center pr-0 with-selected-discount">
								<div class="wrapper">
									<div class="discount-selected-container w-100">
										<span class="total-discount-selected">
											<!-- total discount selected - tds -->
											<span class="tds"><?php echo $count;?></span> Discount/s
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-1 col-1 text-center pr-0 with-selected-discount">
								<div class="wrapper">
									<a href="discount_view.php?login=<?php echo $_SESSION['id'];?>&invoice=<?php echo $_GET['invoice'];?>" class="w-100 select_color"><i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							<!-- end - if may napili na discount -->

							<!-- start - wala pa napipili na discount -->
							<div class="col-sm-5 col-5 text-right no-selected-discount">
								<div class="wrapper">
									<a href="discount_view.php?login=<?php echo $_SESSION['id'];?>&cus=<?php echo $_GET['cus'];?>&invoice=<?php echo $_GET['invoice'];?>" class="w-100 select_color"><font size="2px">--</font> <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							<!-- end - wala pa napipili na discount -->
						</div>

					</div>

					<div class="rebate-container">

						<div class="row h-100">

							<div class="col-sm-7 col-7">
								<div class="wrapper">
									<img src="peso_icon.png" width="24" height="24"/>
									<span class="ml-05">Rebate</span>
								</div>
							</div>

							<!-- start - if may napili na Rebate -->
							<div class="col-sm-4 col-4 text-center pr-0 with-selected-rebate">
								<div class="wrapper">
									<div class="rebate-selected-container w-100">
										<span class="total-rebate-selected">
											<!-- total rebate selected - trs -->
									<span class="trs">0</span> Rebate/s
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-1 col-1 text-center pr-0 with-selected-rebate">
								<div class="wrapper">
									<a href="#" class="w-100 select_color"><i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							<!-- end - if may napili na Rebate -->

							<!-- start - wala pa napipili na Rebate -->
							<div class="col-sm-5 col-5 text-right no-selected-rebate">
								<div class="wrapper">
									<a href="rebate.php?login=<?php echo $_SESSION['id'];?>&cus=<?php echo $_GET['cus'];?>" class="w-100 select_color"><font size="2px">--</font> <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							<!-- end - wala pa napipili na Rebate -->

						</div>

					</div>

					<div class="reward-container">

						<div class="row h-100">

							<div class="col-sm-7 col-7">
								<div class="wrapper">
									<img src="gift_icon.png" width="24" height="24"/>
									<span class="ml-05">Reward</span>
								</div>
							</div>

							<!-- start - if may napili na Reward -->
							<div class="col-sm-4 col-4 text-center pr-0 with-selected-reward">
								<div class="wrapper">
									<div class="reward-selected-container w-100">
										<span class="total-reward-selected">
											<!-- total reward selected - trws -->
											<span class="trws">0</span> Reward/s
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-1 col-1 text-center pr-0 with-selected-reward">
								<div class="wrapper">
									<a href="#" class="w-100 select_color"><i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							<!-- end - if may napili na Reward -->

							<!-- start - wala pa napipili na Reward -->
							<div class="col-sm-5 col-5 text-right no-selected-reward">
								<div class="wrapper">
									<a href="reward.php?login=<?php echo $_SESSION['id'];?>&cus=<?php echo $_GET['cus'];?>" class="w-100 select_color"><font size="2px">--</font> <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							<!-- end - wala pa napipili na Reward -->

						</div>

					</div>
<script type="text/javascript">


</script>




					<div   onkeyup=""  class="total-amount-container">

						<div class="row mt-2">

							<div class="col-sm-6 col-6">
								<span class="subtotal-name">Subtotal</span>
							</div>
							<div class="col-sm-6 col-6 text-right">
							    
							    

								
							
							    
							    
							    
							    
								<span id="display_info" class="subtotal-amount"> 	</span>
								
								
								
							</div>

						</div>

							
										<?php
						
			$sid=$_GET['login'];			
						
				
$queryusersst=mysqli_query($con,"SELECT * FROM sales_crm WHERE invoice='$code' ")or die(mysqli_error($con));
$rowusersst=mysqli_fetch_array($queryusersst);		
						
						?>
						

						<div class="row mt-1">

							<div class="col-sm-6 col-6">
								<span class="discount-name">Discount</span>
							</div>
							<div class="col-sm-6 col-6 text-right">
								<h5><?php echo number_format($rowusersst['discount'],2);?></h5>
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
						
						
						
						
						
								
						
						<?php
						
			$sid=$_GET['login'];			
						
				
$queryuserss=mysqli_query($con,"SELECT sum(price) as total FROM temp_prod WHERE invoice='$code' ")or die(mysqli_error($con));
$rowuserss=mysqli_fetch_array($queryuserss);		
						
						
						$query2ata=mysqli_query($con,"select * from  tax where type='Percentage'")or die(mysqli_error());
while($row2ata=mysqli_fetch_array($query2ata)){  
						$taxp=$row2ata['percentage']/100;
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
						
				
$queryuserss=mysqli_query($con,"SELECT sum(price) as total FROM temp_prod WHERE invoice='$code' ")or die(mysqli_error($con));
$rowuserss=mysqli_fetch_array($queryuserss);		
						
						
						$query2ata=mysqli_query($con,"select * from  tax where type='Fixed'")or die(mysqli_error());
while($row2ata=mysqli_fetch_array($query2ata)){  
						$taxp=$row2ata['percentage'];
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
						
				
$queryusersst=mysqli_query($con,"SELECT * FROM sales_crm WHERE invoice='$code' ")or die(mysqli_error($con));
$rowusersst=mysqli_fetch_array($queryusersst);		
						
						?>
						

						<div class="row mt-1">

							<div class="col-sm-6 col-6">
								<div class="wrapper">
									<span class="total-amount-name">Total Amount</span>
									<img class="ml-05" src="info_icon.png" width="20" height="20"/>
								</div>
							</div>
							<div class="col-sm-6 col-6 text-right">
											    
							    <h3><?php echo number_format($rowusersst['total'],2);?></h3>
						
							</div>


		<div class="col-sm-6 col-6">
								<div class="wrapper">
									<span class="total-amount-name">Status</span>
								
								</div>
							</div>
							<div class="col-sm-6 col-6 text-right">
									<?php
									
									if($rowusersst['status']=="On-processing"){
									?>
							    <h3>Pending</h3>
								<?php
									
									}else{
									?>
													    <h3><?php echo $rowusersst['status'];?></h3>
										<?php
									
									}
									?>
							</div>
						</div>

<style>
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
    
</style>


			<div class="row mt-1">

							<div class="col-sm-12 col-12">
								<div class="wrapper">
								    
								<button onclick="window.location.href='crm_view_update.php?login=<?php echo $_GET['login'];?>&id=<?php echo $_GET['id'];?>&cus=<?php echo $_GET['cus'];?>&invoice=<?php echo $_GET['invoice'];?>';"  style="width:100%;" class="add-product" href=""><center>Update Status</center></button>
								</div>
							</div>
				

						</div>
			<div class="row mt-1">

							<div class="col-sm-12 col-12">
							<hr>
							</div>
				

						</div>

					</div>


				</div>

			</div>

		</div>


<div id="display_info" >
		<!-- The Modal -->
		<div id="myModal" class="modal">

			<div class="row h-100">

				<div class="col-sm-6 col-12 tablet-pad-r-0">
					<!-- Modal content -->
					<div class="wrapper">

						<div class="modal-content">
							<div class="modal-header">
								<span class="close"><i class="fa fa-times-circle-o"></i></span>
								<!-- <h2>Modal Header</h2> -->
							</div>
							<div class="modal-body">
								<div class="row mt-2">
									<span class="text-center w-100 f-20 bold">Enter Quantity</span>
								</div>
								<div class="row mt-1">
								    



									<!-- <form action=""> -->
									<form class="w-100">
										<input type="hidden" name="prod-id" id="prod-id">
										<input type="hidden" value="<?php echo $_GET['login'];?>" id="descr">
										
											<input type="hidden" value="1" id="cus">
										
										<input type="hidden" id="prod-price-type">
										<div class="input-group">
											<input type="button" value="-" class="button-minus" data-field="quantity">
											<input type="number" step="1" max="999" value="0" name="quantity" id="qty" class="quantity-field">
											<input type="button" value="+" class="button-plus" data-field="quantity">
										</div>
										
										<div class="mt-1">
								
										    
										    
											<button type="submit" name="" value="submit" onclick="return clickButton2(); " id="Submit" type="submit">Save</button>
										</div>

										<div class="mt-1 margin-auto">
											<a style="padding-top:18px" onclick="return clickButton();"  class="cancel">Cancel</a>
										</div>

									</form>
									
		
								
								
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">



function myFunction(){
  


 
}









</script>	
						
									    					
<script type="text/javascript">


 
function loaddata()
{


  


}



function clickButton(){
 
    var prod_id=document.getElementById('prod-id').value;

    var descr=document.getElementById('descr').value;
        var qty=document.getElementById('qty').value;
                var cus=document.getElementById('cus').value;
            
    $.ajax({
        type:"post",
        url:"save_cart.php",
        dataType: "text",
        data: 
        {  
           'prod_id' :prod_id,
           'qty' :qty,
           'cus' :cus,
           'descr' :descr
        },
        cache:false,
       success: function (response) {
        data = JSON.parse(response);
        result1 = data[0].id;
        result2 = data[0].username;
        result3 = data[0].name;
        result4 = data[0].dis;
        $('#display_info').html(result1);
        $('#display_info1').html(result2);
        $('#display_info2').html(result3);
        $('#dis').html(result4);

  }
    });
    return false;
    
    
    
    
    

    
    
    
    
 }
 
 function clickButton2(){
 
    var prod_id=document.getElementById('prod-id').value;

    var descr=document.getElementById('descr').value;
        var qty=document.getElementById('qty').value;
                var cus=document.getElementById('cus').value;
            
    $.ajax({
        type:"post",
        url:"save_cart.php",
        dataType: "text",
        data: 
        {  
           'prod_id' :prod_id,
           'qty' :qty,
           'cus' :cus,
           'descr' :descr
        },
        cache:false,
       success: function (response) {
        data = JSON.parse(response);
        result1 = data[0].id;
        result2 = data[0].username;
        result3 = data[0].name;
        result4 = data[0].dis;
        $('#display_info').html(result1);
        $('#display_info1').html(result2);
        $('#display_info2').html(result3);
        $('#dis').html(result4);
  window.location.reload();
  }
    });
    return false;
    
    
    
    
    

    
    
    
    
 }
 
 
 
</script>
							
									
									
									
									
									
									
									
									
								</div>
							</div>
							<!-- <div class="modal-footer">
								<h3>Modal Footer</h3>
							</div> -->
						</div>

					</div>
					
				</div>

				<div class="col-sm-6 col-12">

				</div>
			</div>
			
		
		</div>

		<script type="text/javascript">

			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("prod_quan");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];
			var span1 = document.getElementsByClassName("cancel")[0];

			function openModal(id, productName, productPriceType) {

				$('.quantity-field').val(0);
				$('.button-plus').css("background-color","rgba(226,255,226,1)");
				$('.button-plus').css("color","black");

				$('#prod-id').val(id);
				$('#prod-name').val(productName);
				$('#prod-price-type').val(productPriceType);

				modal.style.display = "block";

			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				$('#prod-id').val('');
				$('#prod-name').val('');
				$('#prod-price-type').val('');
				modal.style.display = "none";
			}

			span1.onclick = function() {
				$('#prod-id').val('');
				$('#prod-name').val('');
				$('#prod-price-type').val('');
				modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					$('#prod-id').val('');
					$('#prod-name').val('');
					$('#prod-price-type').val('');
					modal.style.display = "none";
				}
			}

			function incrementValue(e) {
				console.log(btn);

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

			$('#Submit').on('click', function(e) {



  
  
  

				e.preventDefault();
				document.getElementById("myModal").style.display = "none";

				var prodId = $('#prod-id').val(),
					quantity = $('.quantity-field').val();
					
					
					
					
				console.log(quantity);
				$('.prod_quan_id_'+prodId).text(quantity);



				if(parseInt(quantity) > 0){
					$('#spc_'+prodId).css("border","2px solid rgba(0,133,63,1)");
				} 

				if(parseInt(quantity) == 0){
					$('#spc_'+prodId).removeAttr("style");
					$('#spc_'+prodId).css("border","2px solid #d3d3d369;");
				}
				
				
				
				
				
				

				
				
				
				

			});

			/* new changes */
			$(document).ready( function () {
	

			    
				var totalDiscountSelected = $('.tds').text(),
					convertedToIntDiscount = parseInt(totalDiscountSelected),
					totalRebateSelected = $('.trs').text(),
					convertedToIntRebate = parseInt(totalRebateSelected),
					totalRewardSelected = $('.trws').text(),
					convertedToIntReward = parseInt(totalRewardSelected);

				if(convertedToIntDiscount > 0){
					$('.no-selected-discount').addClass('d-none');
					$('.with-selected-discount').addClass('d-block');
				} else {
					$('.with-selected-discount').addClass('d-none');
					$('.no-selected-discount').addClass('d-block');
				}

				if(convertedToIntRebate > 0){
					$('.no-selected-rebate').addClass('d-none');
					$('.with-selected-rebate').addClass('d-block');
				} else {
					$('.with-selected-rebate').addClass('d-none');
					$('.no-selected-rebate').addClass('d-block');
				}

				if(convertedToIntReward > 0){
					$('.no-selected-reward').addClass('d-none');
					$('.with-selected-reward').addClass('d-block');
				} else {
					$('.with-selected-reward').addClass('d-none');
					$('.no-selected-reward').addClass('d-block');
				}

				//search function
				$(".search-product").on("keyup", function() {
					var g = $(this).val().toLowerCase();
					$("#product-name span").each(function() {
						var s = $(this).text().toLowerCase();
						$(this).closest('.single-product-container')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
					});
				})

			});
			/* new changes */

		</script>

	</body>
</html>
         
         
         
         
         
         
         
         
         
         
         
         