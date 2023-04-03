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
                    <h4>Booking History</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                              <th>#</th>
                                    <th>Transaction Code</th>
                                    <th>Customer Fullname</th>
                               <th>Rider Fullname</th>
                                <th>Collect to</th>
                           
                            <th>Item Description</th>
                            <th>Note to rider</th>
                                  <th>Express</th>
                                           <th>Cash Handlings</th>
                                             <th>Total Km</th>
                                                    <th>Rider Fee</th>
                                                    <th>Status</th>
                                                      <th>Date Accepted</th>
                                                        <th>Date Delivered</th>
                                                          <th>Type</th>
                                                          
                                                            <th>Customer Cancellation Reason</th>
                                                                  <th>Rider Cancellation Reason</th>
                                                                
                                                                  
                                                            <th>Action</th>
                         
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php
$ii=$_GET['id'];


if($_GET['id']==""){

$query=mysqli_query($con,"select * from  booking_history where status='Completed' || status='Cancelled' order by id asc")or die(mysqli_error());

}else{
    
    $query=mysqli_query($con,"select * from  booking_history where status='Completed' and rider_id='$ii' || status='Cancelled' and rider_id='$ii' order by id asc")or die(mysqli_error());
    
}

while($row=mysqli_fetch_array($query)){  

$sid=$row['user_id'];
$querys=mysqli_query($con,"select * from  customer where id='$sid' order by lastname asc")or die(mysqli_error());
$rows=mysqli_fetch_array($querys);


$sids=$row['rider_id'];
$queryss=mysqli_query($con,"select * from  user where id='$sids' order by lastname asc")or die(mysqli_error());
$rows2=mysqli_fetch_array($queryss);

$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                                 <td><?php echo $row['transaction_code']?></td>
                                                                  
                                      
                                          
                                      <td><?php echo strtoupper($rows['lastname'])?>, <?php echo strtoupper($rows['firstname'])?> <?php echo strtoupper($rows['middlename'])?></td>
                                      
                                                  
                                      <td><?php echo strtoupper($rows2['lastname'])?>, <?php echo strtoupper($rows2['firstname'])?> <?php echo strtoupper($rows2['middlename'])?></td>
                                        <td><?php echo $row['collect']?></td>
                                                   <td><?php echo $row['item_desc']?></td>
                                                                                     <td><?php echo $row['notes']?></td>
                                                                  
                                        <td><?php echo $row['express']?></td>
                                                                  <td><?php echo $row['cash_handling']?></td>
                                                                <td><?php echo $row['total_km']?></td>
                                                                        
                                                    <td><?php echo number_format($row['rider_fee'],2)?></td>
                                                    
                                                      <td><?php echo $row['status']?></td>
                                                                  
                                                                  <td><?php echo $row['date_accepted']?></td>
                                                                  
                                                                  
                                                                                <td><?php echo $row['date_delivered']?></td>
                                                                                           <td><?php echo $row['type']?></td>
                                                                      
                                                     <td><?php echo $row['cus_reason']?> - <?php echo $row['cus_message']?></td>
                                                                <td><?php echo $row['rider_reason']?> - <?php echo $row['rider_message']?></td>
                                                                
                                                                
                                                                
                                                                <td><a href="booking.php?id=<?php echo $row['transaction_code'];?>" class="btn btn-success">View</a></td>                                                	   
                                                   
					         
                                                                                                                                            
                                                                  
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