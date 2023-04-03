<?php

include('header.php');

?>
      <!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Rider's Account</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                              <th>#</th>
                               <th>Rider ID</th>
                                     <th>Top Up</th>
                         
                                <th>Wallet</th>
                           
                            <th>Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Contact No.</th>
                            <th>Gender</th>
                                      <th>Address</th>
                                                <th>TIN</th>
                                  <th>Sponsor</th>
                               <th>Date Registered</th>
                                <th>Ratings</th>
                                <th>Cancelled Transaction</th>
                                <th>Status</th>
                              
                                 <th>Action</th>
                            <th>History</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php




if($rowuser['type']==2){
$sp=$rowuser['id'];
$query=mysqli_query($con,"select * from  user where type='3' and sponsor_id='$sp' order by lastname asc")or die(mysqli_error());

}else{
    
    $query=mysqli_query($con,"select * from  user where type='3' order by lastname asc")or die(mysqli_error());
    
}

while($row=mysqli_fetch_array($query)){  

$sid=$row['sponsor_id'];
$querys=mysqli_query($con,"select * from  user where id='$sid' order by lastname asc")or die(mysqli_error());
$rows=mysqli_fetch_array($querys);


$count++;

$rid=$row['id'];


$querysrate=mysqli_query($con,"select sum(rate) as rate from  booking_history where rider_id='$rid' and status='Completed' ")or die(mysqli_error());
$rowrate=mysqli_fetch_array($querysrate);



$querysrate2=mysqli_query($con,"select * from  booking_history where rider_id='$rid' and status='Completed' ")or die(mysqli_error());
$rowratecount=mysqli_num_rows($querysrate2)*5;


$ratings2=$rowrate['rate']/$rowratecount;
$ratings=$ratings2*100;


$querysrate2s=mysqli_query($con,"select * from  booking_history where rider_id='$rid' and rider_reason!='' ")or die(mysqli_error());
$rowratecounts=mysqli_num_rows($querysrate2s);


				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                            
                                      <td><?php echo $row['id_number']?></td>
                                                                                  	   <td><a href="wallet_rider_o.php?id=<?php echo $row['id'];?>" class="btn btn-success">TopUp</a></td>
                                                  
                                        <td><?php echo $row['wallet']?></td>
                                          
                                      <td><?php echo strtoupper($row['lastname'])?>, <?php echo strtoupper($row['firstname'])?> <?php echo strtoupper($row['middlename'])?></td>
                                      
                                      
                                                    <td><?php echo $row['username']?></td>
                                                    
                                                    
                                                                  <td><?php echo $row['password']?></td>
                                                                  
                                                                  
                                                                                <td><?php echo $row['email']?></td>
                                                                                              <td><?php echo $row['contact']?></td>
                                                                                                            <td><?php echo $row['gender']?></td>
                                                                                                            
                                                                                                             <td><?php echo $row['address']?></td>
                                                                                                              <td><?php echo $row['tin']?></td>
                                                                                                              
                                                       <td><?php echo strtoupper($rows['lastname'])?>, <?php echo strtoupper($rows['firstname'])?> <?php echo strtoupper($rows['middlename'])?></td>                                                                    <td><?php echo $row['date_added']?></td>
                                                                                   <td><?php echo $ratings?>%</td>
                                                    <td><?php echo $rowratecounts?></td>
                                                                                                                                                              <td>
                                                                                                                       
                                       <?php
                                   if($row['status']=="Pending"){?><div class="badge badge-danger badge-shadow"><?php echo $row['status'];?></div> 
                                  
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                  
                                              <?php
                                   if($row['status']=="Active"){?>
                                   
                                   <div class="badge badge-success badge-shadow"><?php echo $row['status'];?>
                                   
                                   </div> 
                                  
                                   <?php
                                   }
                                   
                                   ?>
                                                   
                                       <?php
                                   if($row['status']=="In-active"){?><div class="badge badge-danger badge-shadow"><?php echo $row['status'];?></div> 
                                  
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                                                      <?php
                                   if($row['status']=="Blocked"){?><div class="badge badge-info badge-shadow"><?php echo $row['status'];?></div> 
                               
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                                 
                                                                                                                                            
                                                                                                                                            </td>
                                                                                                               
                                                                                                                            	   <td><a href="edit_user_rider.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                                                                                                                            	                                              	   <td><a href="booking_history.php?id=<?php echo $row['id'];?>" class="btn btn-info">Booking History</a></td>
                                                                             
                                                                                                                            	   
					         
                                                                                                                                            
                                                                  
                          </tr>
                          
                          
                          <?php
}
                          
                          ?>
                    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php
     
     include('footer.php');
     
     ?>