
<?php
         include('../dist/dbcon.php');
  
error_reporting(0);

session_start();

if($_SESSION['aid']>=1){

}else{
	header('Location:../');
}
date_default_timezone_set("Asia/Manila"); 

         $sid=$_SESSION['aid'];

$queryusers=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);



         ?>
          
          
          
          

                   <?php
         include('../dist/dbcon.php');
  
error_reporting(0);

session_start();

if($_SESSION['aid']>=1){

}else{
	header('Location:../');
}
date_default_timezone_set("Asia/Manila"); 

         $sid=$_SESSION['aid'];

$queryusers=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);



         ?>
<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>LoyaLeadsta </title>
  <!-- General CSS Files -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../loyalicon.fw.png' />
</head>

<body style="backgorund-color:green">
 <!-- <div class="loader"></div>-->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
     

          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
  
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
           
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="notification.php">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
  <style>
      
      .modal-body {
    background-color: #FFFFF2;
    position: relative;
    -ms-flex: 1 1 auto;
    -webkit-box-flex: 1;
    flex: 1 1 auto;
    padding: 2rem;
}
      .modal-header {
    border-bottom: none;
    padding-bottom: 5px;
    background-color: #00803D;
    color: white;
}
  </style>        
          
          
     
          
          
          
          
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
              
              
       
              <img alt="image" src="male.fw.png"
                class="user-img-radious-style"> 
                
                
                    
                <span class="d-sm-none d-lg-inline-block">
                    
                    
                </span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"><?php echo $rowuser['firstname'];?> <?php echo $rowuser['lastname'];?></div>
              
              
              
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> 
              




              
              <a href="changepass.php" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Change Password
              </a>
              
              
              
              <div class="dropdown-divider"></div>
              
                            
                                                    <?php
           if($_SESSION['type']==0 || $_SESSION['type']==1){   
              
              ?>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
                                                    <?php
           }
              
              ?>
              
                                                    <?php
           if($_SESSION['type']==3){   
              
              ?>
              <a href="logout_app.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
                                                    <?php
           }
              
              ?>
              
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <!--<img alt="image" src="assets/img/logo.png" class="header-logo" />--> <span
                class="logo-name">LoyaLeadsta</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            

            
            
            
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="dashboard.php"){ echo"active"; }
?> ">
              <a href="dashboard.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            
            
            
            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                            <?php
           if($_SESSION['type']==1){   
              
              ?>

                  <?php
                  
$query_countpos=mysqli_query($con,"select * from  sales order by id asc")or die(mysqli_error());
$pos=mysqli_num_rows($query_countpos); 
                  ?>
            
                                  <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="pos_transaction.php" || basename($_SERVER['PHP_SELF'])=="crm_transaction.php"  ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="truck"></i><span>Transactions (<?php echo $pos;?>)</span></a>
              <ul class="dropdown-menu">
                   <li><a href="pos_transaction.php">POS Transaction(<?php echo $pos;?>)</a></li>
                   
                   
                                   <?php
                  
$query_countpos=mysqli_query($con,"select * from  sales_crm order by id asc")or die(mysqli_error());
$pos=mysqli_num_rows($query_countpos); 
                  ?>
                <li><a href="crm_transaction.php">CRM Transaction(<?php echo $pos;?>)</a></li>
      
              </ul>
            </li>
            
            
                        
                      <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="adjustment_lists.php" || basename($_SERVER['PHP_SELF'])=="stockin.php" ||  basename($_SERVER['PHP_SELF'])=="product_out.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="airplay"></i><span>Inventory</span></a>
              <ul class="dropdown-menu">
                   <li><a href="product_all.php">Products</a></li>
               <li><a href="category.php">Category</a></li>
    <li><a href="stockin.php">Replenishments</a></li>
            <li><a href="adjustment_lists.php">Adjustment</a></li>
        <li><a href="category.php">Transfers</a></li>
            <li><a href="returns_lists.php">Returns</a></li>
        
        
                     
              </ul>
            </li>
            
            
            
            
            
            
                                             
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="discounts.php"){ echo"active"; }
?> ">
              <a href="discounts.php" class="nav-link"><i data-feather="percent"></i><span>Discounts</span></a>
            </li>
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="tax.php"){ echo"active"; }
?> ">
              <a href="tax.php" class="nav-link"><i data-feather="activity"></i><span>Taxes</span></a>
            </li>
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="payments.php"){ echo"active"; }
?> ">
              <a href="payments.php" class="nav-link"><i data-feather="credit-card"></i><span>Payments</span></a>
            </li>
            
            
            
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="quotations.php"){ echo"active"; }
?> ">
              <a href="quotations.php" class="nav-link"><i data-feather="git-pull-request"></i><span>Quotations</span></a>
            </li>
            
            
                                  <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="product_all.php" || basename($_SERVER['PHP_SELF'])=="product_onsale.php" ||  basename($_SERVER['PHP_SELF'])=="product_out.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="book"></i><span>Bookings</span></a>
              <ul class="dropdown-menu">
                   <li><a href="product_all.php">Delivery</a></li>
               <li><a href="returns_lists.php">Returns</a></li>

        
        
                     
              </ul>
            </li>
            
                                              <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="rewards.php" || basename($_SERVER['PHP_SELF'])=="rebates.php" ||  basename($_SERVER['PHP_SELF'])=="referral.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="award"></i><span>Incentives</span></a>
              <ul class="dropdown-menu">
                   <li><a href="program.php">Program</a></li>
               <li><a href="rewards.php">Rewards</a></li>
       <li><a href="rebates.php">Rebates</a></li>
        
               <li><a href="referral.php">Referrals</a></li>
                     
              </ul>
            </li>
            
                                                         <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="adjustment_lists.php" || basename($_SERVER['PHP_SELF'])=="sales_channelagent3.php"  ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="alert-octagon"></i><span>Approvals</span></a>
              <ul class="dropdown-menu">
                      <li><a href="sales_channelagent2.php">Users</a></li>
             <li><a href="adjustment_lists.php">Adjustments</a></li>
               <li><a href="product_critical.php">Transfers</a></li>
                 <li><a href="returns_lists.php">Returns</a></li>
                   <li><a href="product_critical.php">Bookings</a></li>
                     <li><a href="product_critical.php">Incentives</a></li>
                                          <li><a href="rebate_request.php">Rebates</a></li>
              
              </ul>
            </li>
            
            
            
                <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="product_critical.php" || basename($_SERVER['PHP_SELF'])=="stockin.php"  ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="book-open"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
              <li><a href="crm_sales.php">Sales CRM Reports</a></li>
              <li><a href="pos_sales.php">Sales POS Reports</a></li>
             <li><a href="geo_search.php">Geotagging Reports</a></li>
             
              </ul>
            </li>     
                     
                     
                     
                              
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="support.php"){ echo"active"; }
?> ">
              <a href="support.php" class="nav-link"><i data-feather="alert-triangle"></i><span>Supports</span></a>
            </li>
   
                     
                       

                                        

            
            
              <li class="menu-header">History Logs</li>
            
            
                         <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="logs.php"){ echo"active"; }
?> ">
              <a href="logs.php" class="nav-link"><i data-feather="tablet"></i><span>Logs</span></a>
            </li>
            
            
            
            
            
            
                                        <?php
           }  
              
              ?>


                                <?php
           if($_SESSION['type']==0){   
              
              ?>


            
                  <?php
                  
$query_countpos=mysqli_query($con,"select * from  sales order by id asc")or die(mysqli_error());
$pos=mysqli_num_rows($query_countpos); 
                  ?>
                  
                                                                        <?php
                  
$query_countpos2=mysqli_query($con,"select * from  sales_crm order by id asc")or die(mysqli_error());
$pos2=mysqli_num_rows($query_countpos2); 
                  ?>
            
                                  <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="pos_transaction.php" || basename($_SERVER['PHP_SELF'])=="crm_transaction.php"  ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="truck"></i><span>Transactions (<?php echo $pos+$pos2;?>)</span></a>
              <ul class="dropdown-menu">
                   <li><a href="pos_transaction.php">POS Transaction(<?php echo $pos;?>)</a></li>
                   

                <li><a href="crm_transaction.php">CRM Transaction(<?php echo $pos2;?>)</a></li>
                   
                   
               
      
              </ul>
            </li>



                        
                      <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="adjustment_lists.php" || basename($_SERVER['PHP_SELF'])=="stockin.php" ||  basename($_SERVER['PHP_SELF'])=="product_out.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="airplay"></i><span>Inventory</span></a>
              <ul class="dropdown-menu">
                   <li><a href="product_all.php">Products</a></li>
               <li><a href="category.php">Category</a></li>
    <li><a href="stockin.php">Replenishments</a></li>
            <li><a href="adjustment_lists.php">Adjustment</a></li>
        <li><a href="category.php">Transfers</a></li>
            <li><a href="returns_lists.php">Returns</a></li>
        
        
                     
              </ul>
            </li>
            



                                             
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="discounts.php"){ echo"active"; }
?> ">
              <a href="discounts.php" class="nav-link"><i data-feather="percent"></i><span>Discounts</span></a>
            </li>
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="tax.php"){ echo"active"; }
?> ">
              <a href="tax.php" class="nav-link"><i data-feather="activity"></i><span>Taxes</span></a>
            </li>
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="payments.php"){ echo"active"; }
?> ">
              <a href="payments.php" class="nav-link"><i data-feather="credit-card"></i><span>Payments</span></a>
            </li>
            
            
            
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="quotations.php"){ echo"active"; }
?> ">
              <a href="quotations.php" class="nav-link"><i data-feather="git-pull-request"></i><span>Quotations</span></a>
            </li>
            
            
                                  <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="product_all.php" || basename($_SERVER['PHP_SELF'])=="product_onsale.php" ||  basename($_SERVER['PHP_SELF'])=="product_out.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="book"></i><span>Bookings</span></a>
              <ul class="dropdown-menu">
                   <li><a href="product_all.php">Delivery</a></li>
               <li><a href="returns_lists.php">Returns</a></li>

        
        
                     
              </ul>
            </li>
            
                                              <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="rewards.php" || basename($_SERVER['PHP_SELF'])=="rebates.php" ||  basename($_SERVER['PHP_SELF'])=="referral.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="award"></i><span>Incentives</span></a>
              <ul class="dropdown-menu">
                   <li><a href="program.php">Program</a></li>
               <li><a href="rewards.php">Rewards</a></li>
       <li><a href="rebates.php">Rebates</a></li>
        
               <li><a href="referral.php">Referrals</a></li>
                     
              </ul>
            </li>
            
                        
                                              <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="maintenance.php" || basename($_SERVER['PHP_SELF'])=="company_type.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="file"></i><span>Maintenance</span></a>
              <ul class="dropdown-menu">
                   <li><a href="maintenance.php">Points Rate</a></li>
               <li><a href="company_type.php">Company Type EWT</a></li>

        
                     
              </ul>
            </li>

            
            
            
            
                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="announcement.php"){ echo"active"; }
?> ">
              <a href="announcement.php" class="nav-link"><i data-feather="bell"></i><span>Announcements</span></a>
            </li>

                      <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="customer.php" || basename($_SERVER['PHP_SELF'])=="sales_agents.php" || basename($_SERVER['PHP_SELF'])=="sales_channel.php" || basename($_SERVER['PHP_SELF'])=="admin_lists.php" ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="users"></i><span>Users</span></a>
              <ul class="dropdown-menu">
         <li><a href="admin_lists.php">Super Admin</a></li>
         
         <li><a href="accounting_user.php">Accounting User</a></li>
          <li><a href="marketing_user.php">Marketing User</a></li>
          <li><a href="sales_manager.php">Sales Manager</a></li>
          
          
<li><a href="sales_agents.php">Sales Agents</a></li>
     <li><a href="sales_channel.php">Distributor</a></li>
                <li><a href="sales_channeld.php">Dealer</a></li>
                     
          <li><a href="customer.php">Customers</a></li>
              </ul>
            </li>
            
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="areas.php"){ echo"active"; }
?> ">
              <a href="areas.php" class="nav-link"><i data-feather="map-pin"></i><span>Areas</span></a>
            </li>

                       
                       
                       
                                             <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="adjustment_lists.php" || basename($_SERVER['PHP_SELF'])=="stockin.php"  ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="alert-octagon"></i><span>Approvals</span></a>
              <ul class="dropdown-menu">
                      <li><a href="sales_channeladmin.php">Users</a></li>
             <li><a href="adjustment_lists.php">Adjustments</a></li>
               <li><a href="product_critical.php">Transfers</a></li>
                 <li><a href="returns_lists.php">Returns</a></li>
                   <li><a href="product_critical.php">Bookings</a></li>
                     <li><a href="product_critical.php">Incentives</a></li>
                                             <li><a href="rebate_request.php">Rebates</a></li>
         
              </ul>
            </li>
                       
                       
                                         
                                             <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="product_critical.php" || basename($_SERVER['PHP_SELF'])=="stockin.php"  ){ echo"active"; }
?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="book-open"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
                     <li><a href="crm_sales.php">Sales CRM Reports</a></li>
              <li><a href="pos_sales.php">Sales POS Reports</a></li>
             <li><a href="geo_search.php">Geotagging Reports</a></li>
             
              </ul>
            </li>     
                     
                     
                     
                              
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="areas.php"){ echo"active"; }
?> ">
              <a href="support.php" class="nav-link"><i data-feather="alert-triangle"></i><span>Supports</span></a>
            </li>
   
                     
                       

                                        

            
            
              <li class="menu-header">History Logs</li>
            
            
                         <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="logs.php"){ echo"active"; }
?> ">
              <a href="logs.php" class="nav-link"><i data-feather="tablet"></i><span>Logs</span></a>
            </li>
            
            
            
            
            
                                         <?php
           }  
              
              ?>   
            
                                            <?php
           if($_SESSION['type']==2){   
              
              ?>
            
                        
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="dashboard.php"){ echo"active"; }
?> ">
              <a href="dashboard.php" class="nav-link"><i data-feather="exclamation"></i><span>Pending</span></a>
            </li>
            
            
            
            
                       
                                         <?php
           }  
              
              ?>   
            

          </ul>
        </aside>
      </div>