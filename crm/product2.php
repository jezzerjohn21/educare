


<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOYALEADSTA CRM</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("./Inter-SemiBold.ttf");
			}
			@font-face {
				font-family: "Inter-Regular";
				src: url("./Inter-Regular.ttf");
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
			.see-reviews {
				font-family: "Inter-Regular";
				font-size: 16px;
				color: rgba(155,155,155,1);
				margin-left: 10px;
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
				height: 160px;
				width: 100%;
				border-top-left-radius: 8px;
				border-top-right-radius: 8px;
			}
			.product-details {
				padding: 0.75rem;
			}
			.product-details .d-block:first-child {
				margin-top: 0;
			}
			.product-details .d-block:last-child {
				margin-bottom: 0.5rem;
				word-break: break-all;
			}
			.product-details .d-block {
				margin-top: 0.5rem;
			}
			.product-name {
				font-family: "Inter-SemiBold";
				font-size: 16px;
				font-weight: normal;
				color: black !important;
				text-decoration: none;
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
			.modal-1 {
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
			.modal-2 {
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
			.modal-content-1 {
				background-color: #fefefe;
				margin: auto;
				padding: 20px;
				margin-top: 48px;
				border: 1px solid #888;
				width: 80%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animateright;
				-webkit-animation-duration: 0.4s;
				animation-name: animateright;
				animation-duration: 0.4s;
				border-radius: 20px;
			}
			.modal-content-2 {
				background-color: #fefefe;
				margin: auto;
				padding: 20px 10rem;
				margin-top: 100px;
				border: 1px solid #888;
				width: 100%;
				/* height: 100%; */
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animateright;
				-webkit-animation-duration: 0.4s;
				animation-name: animateright;
				animation-duration: 0.4s;
				border-top-right-radius: 30px;
				border-top-left-radius: 30px;
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
				font-size: 32px;
				font-weight: bold;
				position: absolute;
				top: 6px;
				right: 156px;
			}
			.close-1 {
				color: white;
				font-size: 32px;
				font-weight: bold;
				position: absolute;
				top: 40px;
				right: 53px;
			}

			.close:hover, .close-1:hover,
			.close:focus, .close-1:focus {
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

			.product-details-container {
				padding-left: 1.5rem !important;
				padding-right: 1.5rem !important;
			}
			.product-details-main {
				padding: 0.75rem 0;
			}
			.product-name-product-details {
				font-family: "Inter-SemiBold";
				font-size: 26px;
				font-weight: normal;
			}
			.product-main-description {
				font-family: "Inter-Regular";
				font-size: 14px;
				line-height: 20px;
			}
			.product-price-per-kilo-1 {
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: normal;
				color: rgba(0,133,63,1);
			}

			.mySlides {display: none}
			img {vertical-align: middle;}

			/* Slideshow container */
			.slideshow-container {
				max-width: 1000px;
				position: relative;
				margin: auto;
			}

			/* Next & previous buttons */
			.prev, .next {
				cursor: pointer;
				position: absolute;
				top: 50%;
				width: auto;
				padding: 16px;
				margin-top: -22px;
				color: white;
				font-weight: bold;
				font-size: 18px;
				transition: 0.6s ease;
				border-radius: 0 3px 3px 0;
				user-select: none;
			}

			/* Position the "next button" to the right */
			.next {
				right: 0;
				border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover, .next:hover {
				background-color: rgba(0,0,0,0.8);
			}

			/* Number text (1/3 etc) */
			.numbertext {
				color: #f2f2f2;
				font-size: 14px;
				padding: 8px 12px;
				position: absolute;
				bottom: 0;
				right: 0;
			}

			.dots {
				position: absolute;
				bottom: 0;
				left: 0;
				width: 100%;
				padding: 8px 12px;
			}

			/* The dots/bullets/indicators */
			.dot {
				cursor: pointer;
				height: 12px;
    			width: 12px;
    			background-color: #ececec;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}

			.active1, .dot:hover {
				background-color: rgba(218,186,0,1);
			}

			/* Fading animation */
			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
				from {opacity: .4} 
				to {opacity: 1}
			}

			@keyframes fade {
				from {opacity: .4} 
				to {opacity: 1}
			}

			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 300px) {
				.prev, .next,.text {font-size: 11px}
			}

			.add-to-cart-btn {
				background-color: rgba(218,186,0,1);
				color: white;
				height: 56px;
				width: 100%;
				cursor: pointer;
				border-radius: 8px;
				font-size: 20px;
				font-family: "Inter-SemiBold";
			}
			.input-group {
				clear: both;
				position: relative;
				width: 100%;
			}
			.input-group input[type='button'] {
				background-color: #f8f8f8;
				min-width: 43px;
				width: auto;
				transition: all 300ms ease;
				border: 1px solid rgba(155,155,155,1);
			}
			.input-group .button-minus,
			.input-group .button-plus {
				font-weight: bold;
				height: 56px;
				padding: 0;
				width: 50px;
				position: absolute;
			}
			.button-minus {
				border-top-left-radius: 8px;
				border-bottom-left-radius: 8px;
				float: left;
			}
			.button-plus {
				border-top-right-radius: 8px;
				border-bottom-right-radius: 8px;
				float: right;
			}
			.input-group .quantity-field {
				position: relative;
				height: 56px;
				text-align: center;
				width: 60%;
				display: inline-block;
				font-size: 28px;
				resize: vertical;
				background-color: #f8f8f8;
				border: 1px solid rgba(155,155,155,1);
				border-radius: 0;
				margin-left: 43px;
				color: black;
			}
			input[type="number"] {
				-moz-appearance: textfield;
				-webkit-appearance: none;
			}
			.border-btm {
				border-bottom: 2px solid rgba(211,211,211,1);
				margin-left: -36px;
				margin-right: -36px;
			}
			.border-btm-1 {
				border-bottom: 2px solid rgba(211,211,211,1);
			}
			.store-rate-1 {
				font-family: "Inter-Regular";
				font-size: 25px;
				color: rgba(155,155,155,1);
				/* color: black; */
			}
			.total-reviews {
				font-family: "Inter-SemiBold";
				font-weight: bold;
				font-size: 25px;
				color: black;
			}
			.reviewer-image-container {
				padding-right: 0;
			}
			.reviewer-image {
				border-radius: 50%;
				width: 45px;
				height: 45px;
			}
			.reviewer-container {
				padding-left: 0;
				margin-left: -10px;
			}
			.reviewer-name {
				font-family: "Inter-Regular";
				font-size: 16px;
			}
			.reviewer-review-rate {
				font-size: 12px;
			}
			.review-date-container {
				margin-top: 1rem;
				text-align: right;
			}
			.review-date{
				font-family: "Inter-Regular";
				font-weight: normal;
				text-decoration: none;
				font-size: 14px;
			}
			.product-user-review {
				font-family: "Inter-Regular";
				font-size: 16px;
				line-height: 20px;
				padding-left: 4rem;
			}
			.see-more-btn {
				color: rgba(155,155,155,1);
				font-family: "Inter-Regular";
				font-weight: bold;
				text-decoration: none;
				font-size: 16px;
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
				.product-name-1 {
					font-size: 22px !important;
				}
				.product-price-per-kilo-1 {
					font-size: 16px !important;
				}
				.input-group {
					width: 100% !important;
				}
				.add-to-cart-btn {
					font-size: 18px !important;
				}
				.input-group .quantity-field {
					width: 75% !important;
					font-size: 25px !important;
				}
				.modal-content-1 {
					width: 95% !important;
				}
				.border-btm {
					margin-left: -20px !important;
					margin-right: -20px !important;
				}
				.close {
					right: 40px !important;
				}
				.modal-content-2 {
					padding: 20px 4rem !important;
				}
				.total-reviews, .store-rate-1 {
					font-size: 21px !important;
				}
				.product-user-review {
					font-size: 14px !important;
					padding-left: 3.5rem !important;
				}
				.reviewer-name {
					font-size: 14px !important;
				}
				.review-date {
					font-size: 13px !important;
				}
				.reviewer-container {
					padding-right: 0 !important;
					padding-left: 15px !important;
					margin-left: 0 !important;
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
				.modal-content-1 {
					width: 100% !important;
					margin-top: 100px !important;
					padding: 20px 5px !important;
				}
				.close {
					top: 33px !important;
					right: 22px !important;
				}
				.modal-content-2 {
					padding: 20px 1rem !important;
				}
				.total-reviews, .store-rate-1 {
					font-size: 18px !important;
				}
				.product-user-review {
					font-size: 13px !important;
					padding-left: 3.5rem !important;
				}
				.reviewer-name {
					font-size: 13px !important;
				}
				.review-date {
					font-size: 12px !important;
				}
				.reviewer-container {
					padding-right: 0 !important;
					padding-left: 15px !important;
					margin-left: 0 !important;
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

			<button id="Group_2141">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</button>

			<div class="search-container">
				<i class="fa fa-search icon"></i>
				<input type="text" id="search" name="search" placeholder="Search">
			</div>

			<div class="filter-container">
				<button type="button" class="filter-btn" onclick="openModal()">
					Filter <i class="fa fa-sliders"></i>
				</button>
			</div>

			
			<div class="store-details-container">

				<div class="row">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<?php
      include('../dist/dbcon.php');
      $ii=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM user WHERE id='$ii' order by business_name asc")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
	    
	    
	    
	    
	 $region=$row['region'];
	    
$queryr=mysqli_query($con,"SELECT * FROM refregion WHERE regCode='$region'")or die(mysqli_error($con));
	$rowr=mysqli_fetch_array($queryr);
	    
	

?>



					<div class="col-2 col-sm-1 col-lg-1">

						<div class="image-container">
							<img id="store-image" src="../pos/uploads/<?php echo $row['logo'];?>" alt="store image" srcset="../pos/uploads/<?php echo $row['logo'];?>">
						</div>

					</div>

					<div class="col-10 col-sm-7 col-lg-8">
						
						<div class="store-nameandrate-container">

							<div class="d-block">
								<span class="store-name"><?php echo $row['business_name'];?></span>	 
							</div>
							<div class="d-block">
								<span class="store-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9</span>	
								<a href="#" onclick="openReviews()"class="see-reviews">View Reviews</a> 
							</div>

						</div>

					</div>

					<div class="col-12 col-sm-4 col-lg-3">

						<div class="store-ownerandlocation-container">

							<div class="d-block">
								<span class="store-owner"><i class="fa fa-12px-md fa-user gray"></i> <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></span>	 
							</div>
							<div class="d-block">
								<span class="store-location"><i class="fa fa-12px-md fa-map-marker gray"></i> <?php echo $rowr['regDesc'];?></span>	 
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



					<div style="padding: 10px;" class="col-sm-4 col-6 col-lg-3">

						<a style="text-decoration: none;" ><div class="product-container">

							<div class="product-image-container">
							<center>	<img id="product-image" class="product-image" alt="product image" src="../auth/users/products/<?php echo $row['prod_image'];?>" srcset="../auth/users/products/<?php echo $row['prod_image'];?>"></center>
							</div>

							<div class="product-details">


			<div class="d-block">
									<a data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>" class="product-name"><?php echo $row['prod_name'];?></a>
									<!-- <span class="product-name">Insert One or Two Lines Lorem Product Code Here</span>	  -->
								</div>








								<div class="d-block">
									<span class="product-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9</span>	 
								</div>
								<div class="d-block">
									<span class="product-price-per-kilo">₱<?php echo $row['prod_price'];?>/<?php echo $row['prod_unit'];?></span>	 
								</div>

							</div>

						</div>

					</div>








	<div id="myModal<?php echo $row['id'];?>" class="modal-1">

			<div class="row h-100">

				<div class="col-sm-12 col-12 col-lg-12">

					<!-- Modal content -->
					<div class="wrapper">

						<span class="close" data-dismiss="modal"><i class="fa fa-times-circle-o"></i></span>

						<div class="modal-content-1">
							
							<div class="modal-body">

								<div class="row">

									<div class="col-12 col-sm-6 col-lg-6">
										<div class="slideshow-container">

											<div class="mySlides2 fade">
											  <div class="numbertext">1 / 3</div>
											  <img src="../auth/users/products/<?php echo $row['prod_image'];?>" style="width:100%">
											</div>
											
										<!--	<div class="mySlides fade">
											  <div class="numbertext">2 / 3</div>
											  <img src="../auth/users/products/<?php echo $row['prod_image'];?>" style="width:100%">
											</div>
											
											<div class="mySlides fade">
											  <div class="numbertext">3 / 3</div>
											  <img src="../auth/users/products/<?php echo $row['prod_image'];?>" style="width:100%">
											</div>-->
											
											<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
											<a class="next" onclick="plusSlides(1)">&#10095;</a>

											<div class="dots">
												<span class="dot" onclick="currentSlide(1)"></span> 
												<span class="dot" onclick="currentSlide(2)"></span> 
												<span class="dot" onclick="currentSlide(3)"></span> 
											</div>
										</div>
										
									</div>

									<div class="col-12 col-sm-6 col-lg-6">
										<div class="product-details-container">
											<div class="product-details-main">
												<div class="row mt-1">
													<div class="col-lg-12 col-12 col-sm-12">
														<span class="product-name-product-details"><?php echo $row['prod_name'];?></span>	 
													</div>
													<div class="col-lg-12 col-12 col-sm-12 mt-1">
														<span class="product-price-per-kilo-1">₱<?php echo $row['prod_price'];?>/<?php echo $row['prod_unit'];?></span>	 
													</div>
													<div class="col-12 product-main-description-container mt-1">
														<p class="product-main-description"><?php echo $row['prod_name'];?></p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-12 col-lg-12 mt-1">
										<span class="d-block border-btm"></span>
									</div>
																	
					<?php
         include('../dist/dbcon.php');
  $business_name=$_GET['business_name'];
  
  
if(isset($_POST['signin']))
{
    
    
$prod=$_POST['prod_id'];
$store=$_GET['id2'];
$prod_price=$_POST['prod_price'];
	$quantity=$_POST['quantity'];
	$user_id=$_GET['login'];
	$date=date("Y-m-d");
	$total=$prod_price*$quantity;
	
	$querycate2=mysqli_query($con,"select * from  temp_prod  where user_id='$user_id' and status='Pending' and prod_id='$prod' ")or die(mysqli_error());
$rowcateg2=mysqli_num_rows($querycate2);
if($quantity>=1){
	if($rowcateg2<=0){
		 	mysqli_query($con,"INSERT INTO temp_prod(prod_id,store,price,qty,user_id,status,date_added,total) VALUES('$prod','$store','$prod_price','$quantity','$user_id','Pending','$date','$total')")or die(mysqli_error($con));
	
	
					  echo "<script>document.location='product.php?login=$user_id&id=$store'</script>";
	}else{
	    
	     echo "<script>document.location='product.php?login=$user_id&id=$store'</script>";
	    
	}
}
  
		  


}	  
		
?>					
		
<form method="POST" >
    <input name="prod_id" value="<?php echo $row['id'];?>" type="hidden">
       <input name="prod_price" value="<?php echo $row['prod_price'];?>" type="hidden">
									<div class="col-12 col-sm-12 col-lg-12 mt-1">
										<div class="row quantity-container">
											<div class="input-group col-6 col-sm-6 col-lg-6">
												<input type="button" value="-" class="button-minus" data-field="quantity">
												<input type="number" step="1" max="999" value="0" name="quantity" class="quantity-field">
												<input type="button" value="+" class="button-plus" data-field="quantity">
											</div>
											<div class="col-6 col-sm-6 col-lg-6">
												<button type="submit" name="signin" type="button" class="add-to-cart-btn">Add to Cart</button>
											</div>
										</div>
									</div>
</form>
								</div>

							</div>
							
						</div>

					</div>
					
				</div>

			</div>
		
		</div>
		
		
		<script>
		    
		    
		    		// Get the product details modal
			var productDetails = document.getElementById("myModalProductDetails<?php echo $row['id'];?>");

			function openProductDetails() {

				if( $('#myModalProductDetails<?php echo $row['id'];?>').css('display') == 'block' ) {
					productDetails.style.display = "none";
				} else {
					productDetails.style.display = "block";
				}

			}


		    
		</script>




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


	<div id="myModalProductDetails" class="modal-1">

			<div class="row h-100">

				<div class="col-sm-12 col-12 col-lg-12">

					<!-- Modal content -->
					<div class="wrapper">

						<span class="close"><i class="fa fa-times-circle-o"></i></span>

						<div class="modal-content-1">
							
							<div class="modal-body">

								<div class="row">

									<div class="col-12 col-sm-6 col-lg-6">
										<div class="slideshow-container">

											<div class="mySlides fade">
											  <div class="numbertext">1 / 3</div>
											  <img src="../auth/users/products/<?php echo $row['prod_image'];?>" style="width:100%">
											</div>
											
											<div class="mySlides fade">
											  <div class="numbertext">2 / 3</div>
											  <img src="../auth/users/products/<?php echo $row['prod_image'];?>" style="width:100%">
											</div>
											
											<div class="mySlides fade">
											  <div class="numbertext">3 / 3</div>
											  <img src="../auth/users/products/<?php echo $row['prod_image'];?>" style="width:100%">
											</div>
											
											<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
											<a class="next" onclick="plusSlides(1)">&#10095;</a>

											<div class="dots">
												<span class="dot" onclick="currentSlide(1)"></span> 
												<span class="dot" onclick="currentSlide(2)"></span> 
												<span class="dot" onclick="currentSlide(3)"></span> 
											</div>
										</div>
										
									</div>

									<div class="col-12 col-sm-6 col-lg-6">
										<div class="product-details-container">
											<div class="product-details-main">
												<div class="row mt-1">
													<div class="col-lg-12 col-12 col-sm-12">
														<span class="product-name-product-details">Insert One Two Lines Lorem Product Code Here Vivamus</span>	 
													</div>
													<div class="col-lg-12 col-12 col-sm-12 mt-1">
														<span class="product-price-per-kilo-1">₱999.99/kilogram</span>	 
													</div>
													<div class="col-12 product-main-description-container mt-1">
														<p class="product-main-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-12 col-lg-12 mt-1">
										<span class="d-block border-btm"></span>
									</div>

									<div class="col-12 col-sm-12 col-lg-12 mt-1">
										<div class="row quantity-container">
											<div class="input-group col-6 col-sm-6 col-lg-6">
												<input type="button" value="-" class="button-minus" data-field="quantity">
												<input type="number" step="1" max="999" value="0" name="quantity" class="quantity-field">
												<input type="button" value="+" class="button-plus" data-field="quantity">
											</div>
											<div class="col-6 col-sm-6 col-lg-6">
												<button type="button" class="add-to-cart-btn">Add to Cart</button>
											</div>
										</div>
									</div>

								</div>

							</div>
							
						</div>

					</div>
					
				</div>

			</div>
		
		</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<!-- The Modal Reviews -->
		<div id="myModalReviews" class="modal-2">

			<div class="row h-100">

				<div class="col-sm-12 col-12 col-lg-12">

					<!-- Modal content -->
					<div class="wrapper">

						<span class="close-1"><i class="fa fa-times-circle-o"></i></span>

						<div class="modal-content-2">
							
							<div class="modal-body">

								<div class="row">

									<div class="col-6 col-sm-6 col-lg-6 mt-1">
										<span class="total-reviews">29 Reviews</span>
									</div>
									<div class="col-6 col-sm-6 col-lg-6 text-right mt-1">
										<span class="store-rate-1"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9</span>
									</div>

									<div class="col-12 col-sm-12 col-lg-12 mt-2">
										<span class="d-block border-btm-1"></span>
									</div>

									<div class="col-12 col-sm-12 col-lg-12 mt-1">

										<div class="product-reviews-container">

											<!-- body -->

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>
						
											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>
						
											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>

											<div class="row product-review-per-user">
						
												<div class="col-2 col-sm-1 col-lg-1 reviewer-image-container mt-1">
													<img class="reviewer-image" src="./icon-user.png" alt="reviewer image">
						
												</div>
						
												<div class="col-6 reviewer-container mt-1">
						
													<div class="reviewer-name">
														<span class="d-block">Monica Tolentino</span>
													</div>
						
													<div class="mt-p25">
														<span class="reviewer-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i></span>
													</div>
						
												</div>
						
												<div class="col-4 col-sm-5 col-lg-5 review-date-container">
						
													<span class="d-block review-date">08/23/2021</span>
						
												</div>
						
												<div class="col-12 product-user-review-container">
													<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
												</div>
						
												<div class="col-12 mt-1">
													<span class="d-block border-btm-1"></span>
												</div>
						
											</div>
											
											<!-- body -->
						
										</div>
										
									</div>

								</div>

							</div>
							
						</div>

					</div>
					
				</div>

			</div>
		
		</div>

		<script type="text/javascript">

			// Get the reviews modal
			var reviews = document.getElementById("myModalReviews");

			function openReviews() {

				if( $('#myModalReviews').css('display') == 'block' ) {
					reviews.style.display = "none";
				} else {
					reviews.style.display = "block";
				}

			}

			// Get the product details modal
			var productDetails = document.getElementById("myModalProductDetails");

			function openProductDetails() {

				if( $('#myModalProductDetails').css('display') == 'block' ) {
					productDetails.style.display = "none";
				} else {
					productDetails.style.display = "block";
				}

			}

			// Get the modal
			var modal = document.getElementById("myModal");

			function openModal() {

				if( $('#myModal').css('display') == 'block' ) {
					modal.style.display = "none";
				} else {
					modal.style.display = "block";
				}

			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
				productDetails.style.display = "none";
			}

			// Get the <span> element that closes the modal
			var close1 = document.getElementsByClassName("close-1")[0];

			// When the user clicks on <span> (x), close the modal
			close1.onclick = function() { 
				reviews.style.display = "none";
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

			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active1", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active1";
			}

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
					buttonPlus.css("background-color","#f8f8f8");
					buttonPlus.css("color","black");
				}
			}

			$('.input-group').on('click', '.button-plus', function(e) {
				incrementValue(e);
			});

			$('.input-group').on('click', '.button-minus', function(e) {
				decrementValue(e);
			});

		</script>

	</body>

</html>


