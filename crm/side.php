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
									<p class="sidebar-username d-block"><?php echo $rowuser['firstname'];?> <?php echo $rowuser['lastname'];?></p><p class="sidebar-username d-block"><?php echo $rowuser['id_number'];?></p>
									<p class="sidebar-my-account d-block">My Account</p>
								</div>
							</div>
						</div>

						<a href="dashboard.php?login=<?php echo $sid;?>"><li><i class="fa fa-home"></i>&nbsp;&nbsp;Dashboard</li></a>
									<a href="store.php?login=<?php echo $sid;?>"><li> <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shopping</li></a>
			
								<li > 
							<label for="products"> <i class="fa fa-book"></i>&nbsp;&nbsp;Transactions </label><input type="checkbox" id="products">
							<ul class="submenu">
								<a href="pos_transaction.php?login=<?php echo $sid;?>"><li>POS Transactions</li></a>
								<a href="crm_transaction.php?login=<?php echo $sid;?>"><li class="pb-0">CRM Transactions</li></a>
							</ul>
						</li>
							<a href="mypoints.php?login=<?php echo $sid;?>"><li> <i class="fa fa-tag"></i>&nbsp; Points History</li></a>
				
						<a href="#"><li> <i class="fa fa-tag"></i>&nbsp; Discounts</li></a>
						<a href="#"><li> <i class="fa fa-money-bill"></i>&nbsp;Payments</li></a>
						<a href="#"><li> <i class="fa fa-file"></i>&nbsp; Quotations</li></a>
						<a href="#"><li> <i class="fa fa-truck"></i>&nbsp;Bookings</li></a>
						<a href="#"><li> <i class="fa fa-percent"></i> &nbsp;Incentives</li></a>

						<div class="next-list"></div>
						
						<a href="#"><li> <i class="fa fa-history"></i> &nbsp; Logs</li></a>
						<a href="support.php?login=<?php echo $sid;?>"><li> <i class="fa fa-cog"></i> &nbsp; Support</li></a>
							<a href="logout.php"><li> <i class="fa fa-cog"></i> &nbsp; Logout</li></a>
						
					</ul>

				</div>
			</nav>

		</div>