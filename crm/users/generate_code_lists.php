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
                    <h4>Operator Code Lists</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                              <th>#</th>
                               <th>Code</th>
                                    <th>PIN No.</th>
                            <th>Date Generate</th>
                            <th>No. of Rider</th>
                            <th>Operator</th>
                            <th>Remarks</th>
                            <th>Generate By</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  code order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  

$gid=$row['generate_by'];
$oid=$row['operator_id'];
$count++;

$query2=mysqli_query($con,"select * from  user where id='$gid' order by id asc")or die(mysqli_error());
$row2=mysqli_fetch_array($query2);

$query3=mysqli_query($con,"select * from  user where id='$oid' order by id asc")or die(mysqli_error());
$row3=mysqli_fetch_array($query3);
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                            
                                      <td><?php echo $row['code']?></td>
                                        <td><?php echo $row['pin']?></td>
                                <td><?php echo $row['date_added']?></td>
                                  <td><?php echo $row['no_rider']?></td>
                                  
                                      <?php
                                   if($row['operator_id']=="0"){?>
                                    <td>--</td>
                                    
                                        <?php
                                }else{
                                ?>
                                                   <td><?php echo strtoupper($row3['lastname'])?>, <?php echo strtoupper($row3['firstname'])?> <?php echo strtoupper($row3['middlename'])?></td>
                                
                                                   <?php
                                }
                                ?>
                                     <td><?php echo $row['remarks']?></td>
                                                   <td><?php echo strtoupper($row2['lastname'])?>, <?php echo strtoupper($row2['firstname'])?> <?php echo strtoupper($row2['middlename'])?></td>
                                                                                                                           
                                                                                                                                            
                                                                                                                            	   <td><a href="edit_user.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                                                                                                                            	   
                                                                                                                                     
                                                                                                                                            
                                                                  
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