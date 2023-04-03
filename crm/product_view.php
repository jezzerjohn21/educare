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
				src: url("./Inter-SemiBold.ttf");
			}
			@font-face {
				font-family: "Inter-Regular";
				src: url("./Inter-Regular.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 10. CRM_Products_Details;
				--web-view-id: T_10_CRM_Products_Details;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_10_CRM_Products_Details;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_10_CRM_Products_Details {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(243,243,243,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 10. CRM_Products_Details;
				--web-view-id: T_10_CRM_Products_Details;
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
			.mt-p25{
				margin-top: 0.25rem;
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
			.border-bottom {
				border-bottom: 1px solid rgba(155,155,155,1);
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

			.product-1st-container {
				padding-left: 12rem;
    			padding-right: 12.5rem;
				background-color: white;
				width: 100%;
				padding-top: 2rem;
				padding-bottom: 2rem;
			}

			.product-details {
				padding: 0.75rem 0;
			}
			.product-details .d-block:first-child {
				margin-top: 0;
			}
			.product-details .d-block:last-child {
				margin-bottom: 0.5rem;
				word-break: break-all;
			}
			.product-details .d-block {
				margin-top: 1rem;
			}

			.product-name {
				font-family: "Inter-SemiBold";
				font-size: 26px;
				font-weight: normal;
			}
			.product-rate {
				font-family: "Inter-SemiBold";
				font-size: 16px;
				font-weight: normal;
			}
			.product-price-per-kilo {
				font-family: "Inter-SemiBold";
				font-size: 18px;
				font-weight: normal;
				color: rgba(0,133,63,1);
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

			.store-details-container {
				background-color: white;
				height: 126px;
				width: 100%;
				margin-top: 1rem;
				padding-left: 12rem;
    			padding-right: 12.5rem;
			}
			.product-description-container, .product-reviews-container {
				background-color: white;
				height: auto;
				width: 100%;
				margin-top: 1rem;
				/* padding-left: 12rem;
    			padding-right: 12.5rem; */
				padding: 1rem 12.5rem 2rem 12rem;
			}
			.image-container {
				display: table-cell;
    			vertical-align: middle;
				height: 126px;
			}
			#store-image {
				border-radius: 50%;
				height: auto;
				width: 60px;
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
				font-size: 16px;
				font-weight: bold;
			}
			.store-owner, .store-location, .store-rate {
				font-family: "Inter-Regular";
				font-size: 14px;
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
				margin-left: 1rem;
			}
			.visit-store-container {
				display: table-cell;
    			vertical-align: middle;
				height: 126px;
			}
			.visit-store-btn {
				cursor: pointer;
				background-color: unset;
				color: rgba(40,155,42,1);
				border: 1px solid rgba(40,155,42,1);
				border-radius: 8px;
				font-family: "Inter-SemiBold";
				font-size: 16px;
				height: auto;
				padding: 0.5rem 1rem;
			}
			.product-description-title, .product-reviews-title {
				font-family: "Inter-SemiBold";
				font-weight: bold;
				font-size: 17px;
			}
			.stock-title, .product-category-title {
				font-family: "Inter-Regular";
				font-size: 14px;
			}
			.product-remaining-stock {
				font-family: "Inter-Regular";
				font-weight: bold;
				font-size: 14px;
				padding-left: 2rem;
			}
			.product-category {
				font-family: "Inter-Regular";
				font-weight: bold;
				font-size: 14px;
				padding-left: .5rem;
			}
			.product-main-description {
				font-family: "Inter-Regular";
				font-size: 14px;
				line-height: 20px;
			}

			.product-review-rate {
				font-family: "Inter-SemiBold";
				font-size: 11px;
			}
			.product-reviews-titlerate-container {
				text-align: left;
			}
			.view-all-btn-container {
				text-align: right;
				margin-top: 1.5rem;
			}
			.view-all-btn, .see-all-reviews, .read-more {
				background-color: unset;
				color: rgba(40,155,42,1);
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 17px;
				cursor: pointer;
			}

			.user-name-date{
				font-family: "Inter-Regular";
				font-weight: normal;
				text-decoration: none;
				font-size: 13px;
			}
			.review-date-container {
				margin-top: 1rem;
				text-align: right;
			}
			.review-date{
				font-family: "Inter-Regular";
				font-weight: normal;
				text-decoration: none;
				font-size: 13px;
			}
			.product-user-review {
				font-family: "Inter-Regular";
				font-size: 14px;
				line-height: 20px;
			}
			.see-more-btn {
				color: rgba(155,155,155,1);
				font-family: "Inter-Regular";
				font-weight: bold;
				text-decoration: none;
				font-size: 14px;
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
				font-size: 14px;
			}
			.reviewer-review-rate {
				font-size: 12px;
			}
			.see-all-reviews-container {
				text-align: center;
				width: 100%;
				margin-top: 1rem;
			}
			.read-more-container {
				width: 100%;
				margin-top: 1rem;
			}

			.slider{
				width: 100%; /*Same as width of the large image*/
				position: relative;
				/*Instead of height we will use padding*/
				padding-top: 300px; /*That helps bring the labels down*/
				
				margin: 100px auto;
				
				/*Lets add a shadow*/
				/* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75); */
			}


			/*Last thing remaining is to add transitions*/
			.slider>img{
				position: absolute;
				left: 0; 
				top: -30%;
				transition: all 0.5s;
				width: 100%;
				height: auto;
			}

			.slider input[name='slide_switch'] {
				display: none;
			}

			.slider label {
				/*Lets add some spacing for the thumbnails*/
				margin: 18px 0 0 18px;
				float: left;
				cursor: pointer;
				
				/*Default style = low opacity*/
				opacity: 0.6;
			}

			.slider label img{
				display: block;
			}

			/*Time to add the click effects*/
			.slider input[name='slide_switch']:checked+label {
				/* border-color: #666; */
				border: 3px solid rgba(40,155,42,1);
				border-radius: 10px;
				opacity: 1;
			}
			/*Clicking any thumbnail now should change its opacity(style)*/
			/*Time to work on the main images*/
			.slider input[name='slide_switch'] ~ img {
				opacity: 0;
				transform: scale(1.1);
			}
			/*That hides all main images at a 110% size
			On click the images will be displayed at normal size to complete the effect
			*/
			.slider input[name='slide_switch']:checked+label+img {
				opacity: 1;
				transform: scale(1);
			}
			/*Clicking on any thumbnail now should activate the image related to it*/

			.input-group {
				clear: both;
				/* margin: 0 auto; */
				position: relative;
				width: 80%;
				/* background-color: #f8f8f8;
				border-radius: 8px;
				height: 80px; */
			}
			.input-group input[type='button'] {
				background-color: #f8f8f8;
				min-width: 43px;
				width: auto;
				transition: all 300ms ease;
				
				/* margin-top: 4px;
				margin-left: 8px; */
				border: 1px solid rgba(155,155,155,1);
			}
			.input-group .button-minus,
			.input-group .button-plus {
				font-weight: bold;
				height: 60px;
				padding: 0;
				width: 50px;
				/* position: relative; */
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
				/* right: 73px; */
				float: right;
			}
			.input-group .quantity-field {
				position: relative;
				height: 60px;
				text-align: center;
				width: 50%;
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
			.quanity-title {
				font-family: "Inter-SemiBold";
				font-weight: normal;
				font-size: 16px;
				color: rgba(155,155,155,1);
				display: table-cell;
				vertical-align: middle;
				height: 60px;
			}

			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: absolute; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 80px;
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
				.mobile-view {
					display: none;
				}
				.big-screen-view {
					display: block;
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
				.product-1st-container, .store-details-container, .product-description-container, .product-reviews-container {
					padding-left: 4rem !important;
    				padding-right: 4.5rem !important;
				}
				.product-name {
					font-size: 22px !important;
				}
				.product-rate, .quanity-title {
					font-size: 14px !important;
				}
				.product-price-per-kilo {
					font-size: 16px !important;
				}
				.input-group {
					width: 100% !important;
				}
				.add-to-cart-btn {
					font-size: 18px !important;
				}
				.slider {
					padding-top: 196px  !important;
    				margin: 76px auto  !important;
				}
				.slider label {
					margin: 10px 0 0 8px !important;
				}
				#store-image {
					margin-left: 0 !important;
				}
				.store-name {
					font-size: 15px !important;
				}
				.store-owner, .store-location, .store-rate {
					font-size: 13px !important;
				}
				.input-group .quantity-field {
					width: 55% !important;
					font-size: 25px !important;
				}
				.reviewer-container {
					margin-left: 0 !important;
				}
				.reviewer-name, .reviewer-review-rate {
					margin-left: 1rem !important;
					font-size: 13px !important;
				}
				.product-description-title, .product-reviews-title,
				.view-all-btn, .see-all-reviews, .read-more {
					font-size: 16px !important;
				}
				.stock-title, .product-category-title, .product-main-description,
				.product-user-review {
					font-size: 13px !important;
				}
				.review-date {
					font-size: 12px !important;
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
				.product-1st-container {
					padding: 0 !important;
				}
				.store-details-container, .product-description-container, .product-reviews-container, .product-details-container {
					padding-left: 1.5rem !important;
					padding-right: 1.5rem !important;
				}
				.product-name {
					font-size: 20px !important;
				}
				.product-rate, .quanity-title, .store-name {
					font-size: 14px !important;
				}
				.product-price-per-kilo {
					font-size: 16px !important;
				}
				.img-column {
					padding-left: 7px !important;
				}
				#store-image {
					margin-left: 0 !important;
					width: 45px !important;
					margin-bottom: 1rem !important;
				}
				.store-owner, .store-location, .store-rate {
					font-size: 12px !important;
				}
				.visit-store-btn {
					font-size: 13px !important;
				}
				.product-details-column {
					padding-right: 0 !important;
				}
				.visit-btn-column {
					padding: 0 !important;
				}
				.store-nameandrate-container, .store-ownerandlocation-container, .store-details-container, .visit-store-container {
					height: 156px !important;
				}
				.reviewer-container {
					padding-left: 15px !important;
				}
			}
		</style>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body>

		<div id="T_10_CRM_Products_Details">

			<svg class="Rectangle_1637">
				<rect id="Rectangle_1637" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>

			<a href="product.php?login=<?php echo $_GET['login'];?>&id=<?php echo $_GET['id2'];?>" id="Group_2141">
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
			
			<hr>
			
	

			<div style="margin-top: -4px;">

				<div class="product-1st-container">

					<div class="row">
	<?php
     include('../dist/dbcon.php');
$com=$_GET['login'];
$com2=$_GET['id'];

$query=mysqli_query($con,"select * from  products where id='$com2' order by prod_name asc")or die(mysqli_error());
$row=mysqli_fetch_array($query); 
    ?>
						<div class="col-12 col-lg-5 col-sm-5">

							<div class="slider">

								<!--Lets show the first image by default on page load-->
								<input type="radio" name="slide_switch" id="id1" checked="checked"/>
								<label for="id1">
									<img src="../auth/users/products/<?php echo $row['prod_image'];?>" width="70"/>
								</label>
								<img id="NoPath_-_Copy_7" src="../auth/users/products/<?php echo $row['prod_image'];?>" srcset="../auth/users/products/<?php echo $row['prod_image'];?>">
								
								<input type="radio" name="slide_switch" id="id2" />
								<label for="id2">
									<img src="../auth/users/products/<?php echo $row['prod_image'];?>" width="70"/>
								</label>
								<img id="NoPath_-_Copy_7_be" src="../auth/users/products/<?php echo $row['prod_image'];?>" srcset="../auth/users/products/<?php echo $row['prod_image'];?>">
								
								<input type="radio" name="slide_switch" id="id3"/>
								<label for="id3">
									<img src="../auth/users/products/<?php echo $row['prod_image'];?>" width="70"/>
								</label>
								<img id="NoPath_-_Copy_7_bg" src="../auth/users/products/<?php echo $row['prod_image'];?>" srcset="../auth/users/products/<?php echo $row['prod_image'];?>">
								
								<input type="radio" name="slide_switch" id="id4"/>
								<label for="id4">
									<img src="../auth/users/products/<?php echo $row['prod_image'];?>" width="70"/>
								</label>
								<img id="NoPath_-_Copy_7_bh" src="../auth/users/products/<?php echo $row['prod_image'];?>" srcset="../auth/users/products/<?php echo $row['prod_image'];?>">

							</div>

						</div>

					    
						<div class="col-12 col-lg-7 col-sm-7">

							<div class="product-details-container">

								<div class="product-details">

									<div class="d-block">
										<span class="product-name"><?php echo $row['prod_name'];?></span>	 
									</div>
									<div class="d-block mt-1">
										<span class="product-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9</span>	 
									</div>
									<div class="d-block mt-1">
										<span class="product-price-per-kilo">₱<?php echo $row['prod_price'];?>/<?php echo $row['prod_unit'];?></span>	 
									</div>

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
								<div class="row quantity-container mt-1">
									<div class="col-2 col-sm-3">
										<span class="quanity-title">Quantity</span>
									</div>
									<div class="input-group col-6 col-sm-8">
										<input type="button" value="-" class="button-minus" data-field="quantity">
										<input type="number" step="1" max="999" value="0" name="quantity" class="quantity-field">
										<input type="button" value="+" class="button-plus" data-field="quantity">
									</div>
								</div>

								<div class="btn-container mt-1">
									<button type="submit" name="signin" class="add-to-cart-btn">Add to Cart</button>
								</div>
								
								</form>

							</div>

						</div>


					</div>

				</div>



<?php
      include('../dist/dbcon.php');
      $ii=$_GET['id2'];
$querya=mysqli_query($con,"SELECT * FROM user WHERE id='$ii' order by business_name asc")or die(mysqli_error($con));
	$rowa=mysqli_fetch_array($querya);
	    
	    
	    
	    
	 $region=$rowa['region'];
	    
$queryr=mysqli_query($con,"SELECT * FROM refregion WHERE regCode='$region'")or die(mysqli_error($con));
	$rowr=mysqli_fetch_array($queryr);
	    
	

?>




				<div class="store-details-container">

					<div class="row">
	
						<div class="col-1 col-sm-1 col-lg-1 img-column">
	
							<div class="image-container">
								<img id="store-image" src="../pos/uploads/<?php echo $rowa['logo'];?>" alt="store image" srcset="../pos/uploads/<?php echo $rowa['logo'];?>">
							</div>
	
						</div>
	
						<div class="col-7 col-sm-4 col-lg-5 product-details-column">
							
							<div class="store-nameandrate-container">
	
								<div class="d-block">
									<span class="store-name"><?php echo $rowa['business_name'];?></span>	 
								</div>
								<div class="d-block">
									<span class="store-rate"> <i class="fa fa-star"></i> Rating: 5 Stars</span>	 
								</div>
								<div class="d-block mobile-view">
									<span class="store-owner"><i class="fa fa-12px-md fa-user gray"></i> <?php echo $rowa['firstname'];?> <?php echo $rowa['middlename'];?> <?php echo $rowa['lastname'];?></span>	 
								</div>
								<div class="d-block mobile-view">
									<span class="store-location"><i class="fa fa-12px-md fa-map-marker gray"></i> <?php echo $rowr['regDesc'];?></span>	 
								</div>
	
							</div>
	
						</div>
	
						<div class="col-12 col-sm-4 col-lg-4 big-screen-view">
	
							<div class="store-ownerandlocation-container">
	
								<div class="d-block">
									<span class="store-owner"><i class="fa fa-12px-md fa-user gray"></i> <?php echo $rowa['firstname'];?> <?php echo $rowa['middlename'];?> <?php echo $rowa['lastname'];?></span>	 
								</div>
								<div class="d-block">
									<span class="store-location"><i class="fa fa-12px-md fa-map-marker gray"></i> <?php echo $rowr['regDesc'];?></span>	 
								</div>
	
							</div>
							
						</div>

						<div class="col-4 col-sm-3 col-lg-2 d-table text-center visit-btn-column">

							<div class="visit-store-container">

						
								<a href="product.php?login=<?php echo $_GET['login'];?>&id=<?php echo $_GET['id2'];?>" type="button" class="visit-store-btn">
									<span>Visit Store</span>
								</a>

							</div>
							
						</div>
		
					</div>
	
				</div>

				<div class="product-description-container">

					<div class="row">
	
						<div class="col-12 product-description-title mt-1">

							<span class="d-block bold">Product Description</span>

						</div>

						<div class="col-12 mt-1">
							<span class="d-block border-bottom"></span>
						</div>

			
						<div class="col-12 product-main-description-container mt-1">
							<p class="product-main-description"><?php echo $row['prod_desc'];?> </p>
						</div>

						<div class="col-12 read-more-container">
						
							<button type="button" class="read-more">Read More <i class="fa fa-chevron-down"></i> </button>
	
						</div>

					</div>

				</div>

				<div class="product-reviews-container">

					<!-- header -->
					<div class="row product-reviews-header">
	
						<div class="col-6 product-reviews-titlerate-container mt-1">

							<div class="product-reviews-title">
								<span class="d-block bold">Product Reviews</span>
							</div>

							<div class="mt-p25">
								<span class="product-review-rate"> <i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star gold"></i><i class="fa fa-star-half-full gold"></i> 4.9 (8 reviews)</span>
							</div>

						</div>

						<div class="col-6 view-all-btn-container">

							<button type="button" class="view-all-btn">View All ></button>

						</div>

						<div class="col-12 mt-1">
							<span class="d-block border-bottom"></span>
						</div>

					</div>
					<!-- header -->

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

						<div class="col-12 product-user-review-container mt-1">
							<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
						</div>

						<div class="col-12 mt-1">
							<span class="d-block border-bottom"></span>
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

						<div class="col-12 product-user-review-container mt-1">
							<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
						</div>

						<div class="col-12 mt-1">
							<span class="d-block border-bottom"></span>
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

						<div class="col-12 product-user-review-container mt-1">
							<p class="product-user-review">Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean commodo ligula eget aenean. Massa cum sociis natoque penatibus parturient lorem... <a href="#" class="see-more-btn">See More</a></p>
						</div>

						<div class="col-12 mt-1">
							<span class="d-block border-bottom"></span>
						</div>

					</div>

					
					<!-- body -->

					<div class="see-all-reviews-container">
						
						<button type="button" class="see-all-reviews">See All Reviews (8)</button>

					</div>

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

			$('#submit').on('click', function(e) {

				//put the code here or action when proceed to payment clicked

			});

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