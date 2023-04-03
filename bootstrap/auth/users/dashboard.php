<?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
      
      
      
      
                       <?php
           if($_SESSION['type']==1){   
              $id_number=$rowuser['id_number'];
              ?>
      
      
      <section class="section">
      
          <div class="row ">
    
    
    
    
    
    
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                             $region=$rowuser['region'];
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_agent='Pending' and account_type='Distributor' and region='$region' ")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                     ?>
                        <a href="sales_channelagent2.php">      <div class="card-content">
                          <h5 class="font-15">Distributor Applications (Pending)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div>     </a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                           <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                 
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            

                
    
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                       
                      $region=$rowuser['region'];
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_agent='Reject' and account_type='Distributor'  and region='$region'")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                      <a href="sales_channelagentr2.php">  <div class="card-content">
                          <h5 class="font-15">Distributor Applications (Rejected)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div></a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                      
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
    
        
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                                   $region=$rowuser['region'];
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_agent='Pending' and account_type='Dealer' and region='$region'")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                     ?>
                        <a href="sales_channelagent2d.php">      <div class="card-content">
                          <h5 class="font-15">Dealer Applications (Pending)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div>     </a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                           <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                 
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            

                
    
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                    $region=$rowuser['region'];
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_agent='Reject' and account_type='Dealer' and region='$region'")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                      <a href="sales_channelagentr2d.php">  <div class="card-content">
                          <h5 class="font-15">Dealer Applications (Rejected)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div></a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                      
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
    
    
              
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <?php
                          	$query21a1=mysqli_query($con,"select * from  customer  ")or die(mysqli_error());
$count_cust=mysqli_num_rows($query21a1);
                          
                          ?>
                        <div class="card-content">
                          <h5 class="font-15">No. of Customer</h5>
                          <h2 class="mb-3 font-18"><?php echo $count_cust;?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_admin='Approved' and approve_agent='Approved'  ")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                        <div class="card-content">
                          <h5 class="font-15">No. of Sales Channel</h5>
                          <h2 class="mb-3 font-18"><?php echo $count_cust2;?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
    
    
              
         
            
            
          </div>
             <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Revenue chart</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                          Delete</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-9">
                      <div id="chart1"></div>
                      <div class="row mb-0">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="m-b-0">$675</h5>
                              <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                class="col-orange"></i>
                              <h5 class="m-b-0">$1,587</h5>
                              <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="mb-0 m-b-0">$45,965</h5>
                              <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mt-5">
                        <div class="col-7 col-xl-7 mb-3">Total customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">8,257</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total Income</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">$9,857</span>
                          <sup class="text-danger">-18%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Project completed</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">28</span>
                          <sup class="col-green">+16%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total expense</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">$6,287</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">New Customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">684</span>
                          <sup class="col-green">+22%</sup>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart4" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="chart3" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart2" class="chartsh"></div>
                </div>
              </div>
            </div>
          </div>

        

        </section>
      
      
      
       
                       <?php
           }
              
              ?>
      
      
      
                      <?php
           if($_SESSION['type']==0){   
              
              ?>
        <section class="section">
      
          <div class="row ">
    
    
    
    
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_admin='Pending' and approve_agent='Approved' and account_type='Distributor'")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                       <a href="sales_channeladmin.php">  <div class="card-content">
                          <h5 class="font-15">Distributor Applications (Pending)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div>    </a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                  
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
               
    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_admin='Reject' and account_type='Distributor' ")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                        <a href="sales_channeladminr.php"> <div class="card-content">
                          <h5 class="font-15">Distributor Applications (Rejected)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div>    </a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                  
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
        
    
    
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_admin='Pending' and approve_agent='Approved' and account_type='Dealer'")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                       <a href="sales_channeladmind.php">  <div class="card-content">
                          <h5 class="font-15">Dealer Applications (Pending)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div>    </a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                  
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
               
    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_admin='Reject' and account_type='Dealer' ")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                        <a href="sales_channeladminrd.php"> <div class="card-content">
                          <h5 class="font-15">Dealer Applications (Rejected)</h5>
                          <h2 class="mb-3 font-30"><?php echo $count_cust2;?></h2>
    
                        </div>    </a>
                      </div>
                      
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                  
                      
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
    
    
    
    
    
    
    
              
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <?php
                          	$query21a1=mysqli_query($con,"select * from  customer  ")or die(mysqli_error());
$count_cust=mysqli_num_rows($query21a1);
                          
                          ?>
                        <div class="card-content">
                          <h5 class="font-15">No. of Customer</h5>
                          <h2 class="mb-3 font-18"><?php echo $count_cust;?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                       <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='2' and approve_admin='Approved' and approve_agent='Approved'  ")or die(mysqli_error());
$count_cust2=mysqli_num_rows($query21a1);
                          
                          ?>
                        <div class="card-content">
                          <h5 class="font-15">No. of Sales Channel</h5>
                          <h2 class="mb-3 font-18"><?php echo $count_cust2;?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='1' ")or die(mysqli_error());
$count_cust=mysqli_num_rows($query21a1);
                          
                          ?>
                        <div class="card-content">
                          <h5 class="font-15">No. of Sales Agents</h5>
                          <h2 class="mb-3 font-18"><?php echo $count_cust;?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <?php
                          	$query21a1=mysqli_query($con,"select * from  user where type='0' ")or die(mysqli_error());
$count_cust=mysqli_num_rows($query21a1);
                          
                          ?>
                        <div class="card-content">
                          <h5 class="font-15">No. of Administrator</h5>
                          <h2 class="mb-3 font-18"><?php echo $count_cust;?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
 
              
            
            
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Revenue chart</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                          Delete</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-9">
                      <div id="chart1"></div>
                      <div class="row mb-0">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="m-b-0">$675</h5>
                              <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                class="col-orange"></i>
                              <h5 class="m-b-0">$1,587</h5>
                              <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="mb-0 m-b-0">$45,965</h5>
                              <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mt-5">
                        <div class="col-7 col-xl-7 mb-3">Total customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">8,257</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total Income</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">$9,857</span>
                          <sup class="text-danger">-18%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Project completed</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">28</span>
                          <sup class="col-green">+16%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total expense</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">$6,287</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">New Customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">684</span>
                          <sup class="col-green">+22%</sup>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart4" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="chart3" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart2" class="chartsh"></div>
                </div>
              </div>
            </div>
          </div>


        </section>
 
 
                  <?php
           }
           
           ?>
           
           
           
           
                                 <?php
           if($_SESSION['type']==3){   
              
              ?>
        <section class="section">
      
          <div class="row ">
    
              
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-4">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                  <a href="pending_order.php">  <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
             
                        <div class="card-content">
                          <h5 class="font-15">Pending Orders</h5>
                          <h2 class="mb-3 font-18"><?php echo "0";?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                  <a href="pending_order.php">  <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
        <div class="card-content">
                          <h5 class="font-15">To Ship </h5>
                          <h2 class="mb-3 font-18"><?php echo "0";?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
             <a href="pending_order.php">       <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                          <h5 class="font-15">To To Receive </h5>
                          <h2 class="mb-3 font-18"><?php echo "0";?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <a href="pending_order.php"><div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                          <h5 class="font-15">Completed</h5>
                          <h2 class="mb-3 font-18"><?php echo "0";?></h2>
    
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            
            
 
              
            
            
          </div>
        
        </section>
 
 
                  <?php
           }
           
           ?>
           
           
      </div>
     
     <?php
     
     include('footer.php');
     
     ?>