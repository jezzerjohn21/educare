   <?php
     include('../dist/dbcon.php');

session_start();
date_default_timezone_set("Asia/Manila"); 

if($_GET['login']==""){
    
    
    
}else{
    
        $_SESSION['id']=$_GET['login'];
}



$sid=$_SESSION['id'];
$queryusers=mysqli_query($con,"SELECT * FROM customer WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);



         ?>


	<div id="POS_SidePanel">

			<svg class="Rectangle_1637_">
				<linearGradient id="Rectangle_1637_" spreadMethod="pad" x1="0.566" x2="0.318" y1="-0.311" y2="1.587">
					<stop offset="0" stop-color="#7db434" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#00853f" stop-opacity="1"></stop>
				</linearGradient>
				<rect id="Rectangle_1637_" rx="0" ry="0" x="0" y="0" width="100%" height="119">
				</rect>
			</svg>

			<div id="Orders">
				<span>Dashboard</span>
			</div>
			
			<div id="Component_621__30" class="Component_621___30">
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

						<div class="user-info-container">
							<div class="row">
								<div class="col-3">
									<img src="./user-icon.png" class="user-img" alt="user image">
								</div>
								<div class="col-9">
									<p class="sidebar-username d-block"><?php echo $rowuser['firstname'];?> </p>
									<p><?php echo $rowuser['id_number'];?></p>
									<p class="sidebar-my-account d-block">My Account</p>
								</div>
							</div>
						</div>

						<a href="dashboard.php?login=<?php echo $sid;?>"><li><i class="fa fa-tachometer-alt"></i> Dashboard</li></a>
									<a href="store.php?login=<?php echo $sid;?>"><li> <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shopping</li></a>
						<a href="#"><li> <i class="fa fa-money-check-alt"></i> Billing</li></a>
								<li > 
							<label for="products"> <i class="fa fa-receipt"></i>&nbsp;&nbsp;Transactions </label><input type="checkbox" id="products">
							<ul class="submenu">
								<a href="pos_transaction.php?login=<?php echo $sid;?>"><li>POS Transactions</li></a>
								<a href="crm_transaction.php?login=<?php echo $sid;?>"><li class="pb-0">CRM Transactions</li></a>
							</ul>
						</li>
			
				
						<a href="#"><li> <i class="fa fa-tag"></i>&nbsp; Discounts</li></a>
						<a href="#"><li> <i class="fa fa-money-bill"></i>&nbsp;Payments</li></a>
						<a href="#"><li> <i class="fa fa-clipboard-list"></i>&nbsp; Quotations</li></a>
						<a href="#"><li> <i class="fa fa-truck"></i>&nbsp;Bookings</li></a>
						<a href="#"><li> <i class="fa fa-award"></i> &nbsp;Incentives</li></a>

						<div class="next-list"></div>
						
						<a href="#"><li> <i class="fa fa-history"></i> &nbsp; Logs</li></a>
						<a href="support.php?login=<?php echo $sid;?>"><li> <i class="fa fa-cog"></i> &nbsp; Support</li></a>
							<a href="logout.php"><li> <i class="fa fa-cog"></i> &nbsp; Logout</li></a>
						
					</ul>

				</div>
			</nav>

		</div>