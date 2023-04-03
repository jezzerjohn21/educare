<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOYALEADSTA POS</title>
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 11. POS_Payment-rev1;
				--web-view-id: T_11_POS_Payment-rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_11_POS_Payment-rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T_11_POS_Payment-rev1 {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(248,248,248,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 11. POS_Payment-rev1;
				--web-view-id: T_11_POS_Payment-rev1;
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
				text-align: center;
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
				display: initial;
			}
			.container {
				margin-top: 4rem;
				padding-left: 1.5rem;
				padding-right: 1.5rem;
			}
			#nav {
				width: fit-content;
				display:block;
				background-color: #e2f1e2;
				margin: 0 auto;
				border-radius: 8px;
				box-shadow: 0 10px 30px rgb(0 0 0 / 10%);
			}
			#nav ul {
				margin: 6px 6px 2px 6px;
				display: inline-block;
			}
			#nav ul .active {
				color: #289b2a;
			}
			#nav ul li .active {
				background-color: #fff;
				border-radius: 8px;
			}
			#nav ul:After {
				content: "";
				display:block;
				clear:both;
			}     
			#nav ul li {
				display:list-item;
				list-style: none;
				float:left;
			}
			#nav ul li i {
				font-size:25px;
				width:30px;
			} 
			#nav ul li a {
				display:block;
				padding:15px 30px;  
				margin: 1px;
				color: #000;
				font-size: 14px;
				text-decoration:none;
				text-align:center;
				font-family: "Inter-SemiBold";
			}
			.enter-amount {
				font-size: 12px;
				font-family: "Inter-SemiBold";
			}
			.charge-amount {
				cursor: pointer;
				border-radius: 8px;
				height: 56px;
				width: 50%;
				background-color: rgba(40,155,42,1);
				color: white;
				font-size: 18px;
				font-family: "Inter-SemiBold";
			}
			input[type=text], input[type=number] {
				width: 50%;
				background-color: #f8f8f800;
				border-radius: 8px;
				resize: vertical;
				height: 56px;
				text-indent: 1rem;
				text-align: center;
				font-family: "Inter-SemiBold";
				font-size: 50px;
				color: rgba(155,155,155,1);
			}
			.currency-symbol {
				position:absolute;
				padding: 2px 5px;
				font-family: "Inter-SemiBold";
				font-size: 30px;
				color: rgba(155,155,155,1);
			}
			.payment-details-container {
				margin-top: 8rem;
				padding-left: 1.5rem;
				padding-right: 2rem;
			}
			.payment-details {
				font-size: 25px;
				font-family: "Inter-SemiBold";
			}
			.total-amount-container, .credit-terms-container {
				border: 1px solid rgba(155,155,155,1);
				border-radius: 8px;
				height: 80px;
				width: 100%;
				font-family: "Inter-SemiBold";
				letter-spacing: 0.75px;
			}
			.total-amount-name, .credit-terms-name {
				font-size: 12px;
			}
			.total-amount, .credit-terms {
				font-size: 20px;
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

			/* phones */
			@media (max-width: 575px){
				.mobile-view {
					display: block;
				}
				.big-screen-view {
					display: none;
				}
			}

		</style>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body onload="addActiveToCash()">
		<div id="T_11_POS_Payment-rev1">
			<svg class="Rectangle_1637_br">
				<linearGradient id="Rectangle_1637_br" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_br" rx="0" ry="0" x="0" y="0" width="100%" height="100">
				</rect>
			</svg>
			<div id="Payment">
				<span>Payment</span>
			</div>
			<div id="Group_2141">
				<a  href="checkout.php?login=<?php echo $_GET['login'];?>" id="Group_2090">
				<svg class="Path_1144" viewBox="0 0 19.4 2">
					<path id="Path_1144" d="M 19.39999389648438 0 L 0 0">
					</path>
				</svg>
				<svg class="Path_890" viewBox="5 5 7 14">
					<path id="Path_890" d="M 12 19 L 5 12 L 12 5">
					</path>
				</svg>
			</a>
			</div>
<form method="POST" action="receipt_save.php?login=<?php echo $_GET['login'];?>&cus=<?php echo $_GET['cus'];?>">
			<div class="row" style="margin-top: -4px;height: inherit;">

				<div class="col-sm-7 col-12">
					
					<?php
					
					$payment_option=$_POST['payment_option'];
							$quantity=$_POST['quantity'];
				
											$gt=$_POST['tot2'];
					?>
					<input type="hidden" value="<?php echo $_POST['gt'];?>" name="gt">
					<input type="hidden" value="<?php echo $_POST['dis'];?>" name="dis">
					<input type="hidden" value="<?php echo $_POST['tot2'];?>" name="tot2">
										<input type="hidden" value="<?php echo $_POST['tax'];?>" name="tax">
					<input type="hidden" value="<?php echo $payment_option;?>" name="payment_option">
								<input type="hidden" value="<?php echo $quantity;?>" name="quantity">
				
					
					<div class="container">

						<div class="row">
							<nav id="nav">
								<ul>
								    
								    <?php if($payment_option=="cash"){
								    ?>
									<li><a id="cashNav" href="#">Cash</a></li>
									<?php
								    }else{
									
									?>
									<li><a id="checkNav" href="#">Check</a></li>
												<?php
								    }
									
									?>
									
									
								</ul>
							</nav>
						</div>

						<div class="row mt-2 text-center">
							<span class="enter-amount w-100">ENTER AMOUNT</span>
						</div>

						<div class="row mt-1 text-center d-block">
							<span class="currency-symbol">₱</span>
							<input type="number" id="amount"  step=".01" min="0.00" max="999999.99" placeholder="0.00" name="amount">
						</div>

						<div class="row mt-3 d-block text-center">
							<button type="submit" class="charge-amount">Charge Amount</button>
						</div>

					</div>

				</div>

				<div class="col-sm-5 col-12 bg-white sticky z-index-100 big-screen-view">
					

					<div class="payment-details-container">

						<div class="row">
							<span class="payment-details">Payment Details</span>
						</div>

								    <?php if($payment_option=="cash"){
								    ?>
								    		<div class="row mt-1">
							<div class="credit-terms-container">
								<span class="credit-terms-name w-100 d-block ml-2 mt-1">Credit Terms</span>
								<span class="credit-terms mt-p5 w-100 d-block ml-2"><?php echo number_format($quantity,0)?></span>
							</div>
						</div>
						<div class="row mt-1">
							<div class="total-amount-container">
								<span class="total-amount-name w-100 d-block ml-2 mt-1">Total Amount</span>
								<span class="total-amount mt-p5 d-block ml-2">₱ <?php echo number_format($gt,2)?></span>
							</div>
						</div>
						
						<?php
						
								    }else{
						?>
    			<div class="row mt-1">
							<div class="credit-terms-container">
								<span class="credit-terms-name w-100 d-block ml-2 mt-1">Credit Terms</span>
								<span class="credit-terms mt-p5 w-100 d-block ml-2"><?php echo number_format($quantity,0)?></span>
							</div>
						</div>
						
						
						<div class="row mt-1">
							<div class="credit-terms-container">
								<span class="credit-terms-name w-100 d-block ml-2 mt-1">Total Amount</span>
								<span class="credit-terms mt-p5 w-100 d-block ml-2">₱ <?php echo number_format($gt,2)?></span>
							</div>
						</div>
						
						    
								    <?php }
								    ?>

					</div>

				</div>

			</div>
</font>
		</div>

		<script type="text/javascript">
			var header = document.getElementById("nav");
			var btns = header.getElementsByTagName('a');
			for (var i = 0; i < btns.length; i++) {
				btns[i].addEventListener("click", function() {
					var current = document.getElementsByClassName("active");
					if (current.length > 0) { 
						current[0].className = current[0].className.replace("active", "");
					}
					this.className = "active";

				});
			}

			function addActiveToCash() {
				$("#cashNav").addClass('active');
			}

			$("input.mask").each((i,ele)=>{
				let clone=$(ele).clone(false)
				clone.attr("type","text")
				let ele1=$(ele)
				clone.val(Number(ele1.val()).toLocaleString("en", {minimumFractionDigits: 2}))
				$(ele).after(clone)
				$(ele).hide()
				clone.mouseenter(()=>{
					ele1.show()
					clone.hide()
				})
				setInterval(()=>{
					let newv = Number(ele1.val()).toLocaleString("en", {minimumFractionDigits: 2})
					if(clone.val()!=newv){
						clone.val(newv)
					}
				},10)

				$(ele).mouseleave(()=>{
					$(clone).show()
					$(ele1).hide()
				})
			})

		</script>

	</body>
</html>