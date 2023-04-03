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

$user_id=$_GET['login'];

$result=mysqli_query($con,"DELETE FROM cart WHERE added_by ='$user_id' and status=''")
	or die(mysqli_error());
	
	$result=mysqli_query($con,"DELETE FROM cart_dis WHERE added_by ='$user_id' and status=''")
	or die(mysqli_error());

$sid=$_SESSION['id'];
$queryusers=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);



         ?>


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
									<p class="sidebar-username d-block"><?php echo $rowuser['firstname'];?></p>
									<p class="sidebar-my-account d-block"><a href="myaccount.php?login=<?php echo $_GET['login'];;?>">My Account</a></p>
										<p class="sidebar-my-account d-block"><font color="green"><u><b><?php echo $rowuser['id_number'];?></b></u></font></p>
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
								<a href="stockin.php?login=<?php echo $_GET['login'];?>"><li> Replenishments</li></a>
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
								<a href="mypoints.php?login=<?php echo $_GET['login'];?>"><li class="pb-0"> Referrals</li></a>
									<a href="dip.php?login=<?php echo $_GET['login'];?>"><li class="pb-0"> DIP</li></a>
							</ul>
						</li>
		
						<div class="next-list"></div>
						
						<a href="logs.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-history"></i> &ensp; Logs</li></a>
						<a href="support.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-cog"></i> &ensp; Support</li></a>
							<a href="logout.php?login=<?php echo $_GET['login'];?>"><li> <i class="fa fa-times"></i> &ensp; Logout</li></a>
					</ul>

				</div>
			</nav>

