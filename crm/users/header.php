<!DOCTYPE html>
<html lang="en">

   <?php
     include('../../dist/dbcon.php');

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
          
          <style>
              
              .main-content {
    padding-left: 0px;
    padding-right: 0px;
    width: 100% !important;
}
              
          </style>
          
          

          
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Booq</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
<link rel="icon" href="../../logo (2).png">
</head>

<body>
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
            
            
            


  
  
  
  
        <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
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
          
          -->
          
      
          
          
          
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
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
     
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            

            
            
            
            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="dashboard.php"){ echo"active"; }
?> ">
              <a href="dashboard.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            
                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="profile.php"){ echo"active"; }
?> ">
              <a href="profile.php" class="nav-link"><i data-feather="user"></i><span>Account</span></a>
            </li>
        
            
                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="billing.php"){ echo"active"; }
?> ">
              <a href="shopping.php" class="nav-link"><i data-feather="shopping-cart"></i><span>Shopping</span></a>
            </li>
            
                                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="transaction.php"){ echo"active"; }
?> ">
              <a href="transaction.php" class="nav-link"><i data-feather="book"></i><span>Transactions</span></a>
            </li>
            
            
                                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="discount.php"){ echo"active"; }
?> ">
              <a href="discount.php" class="nav-link"><i data-feather="percent"></i><span>Discounts</span></a>
            </li>


                                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="payments.php"){ echo"active"; }
?> ">
              <a href="payments.php" class="nav-link"><i data-feather="credit-card"></i><span>Payments</span></a>
            </li>


                                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="quotations.php"){ echo"active"; }
?> ">
              <a href="quotations.php" class="nav-link"><i data-feather="check-square"></i><span>Quotations</span></a>
            </li>


            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="bookings.php" || basename($_SERVER['PHP_SELF'])=="returns.php" ){ echo"active"; }
?>">
                
                                                                      
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="book"></i><span>Bookings</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="bookings.php">Delivery</a></li>
                  <li><a class="nav-link" href="returns.php">Returns</a></li>
           
       
              </ul>
            </li>


            <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="bookings.php" || basename($_SERVER['PHP_SELF'])=="returns.php" ){ echo"active"; }
?>">
                
                                                                      
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="book"></i><span>Incentives</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="bookings.php">Programs</a></li>
                  <li><a class="nav-link" href="returns.php">Rewards</a></li>
                    <li><a class="nav-link" href="returns.php">Rebates</a></li>
                      <li><a class="nav-link" href="returns.php">Refferals</a></li>
           
       
              </ul>
            </li>

                                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="quotations.php"){ echo"active"; }
?> ">
              <a href="quotations.php" class="nav-link"><i data-feather="help-circle"></i><span>Support</span></a>
            </li>

                                        <li class="dropdown <?php 
if(basename($_SERVER['PHP_SELF'])=="quotations.php"){ echo"active"; }
?> ">
              <a href="logout.php" class="nav-link"><i data-feather="log-out"></i><span>Logout</span></a>
            </li>


          </ul>
        </aside>
      </div>