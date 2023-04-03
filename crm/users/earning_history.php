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
                    <h4>Earning History</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                              <th>#</th>
                        
                                <th>Amount</th>
                                 <th>User</th>
                               <th>Type</th>
                            <th>Date Added</th>
                             
                         
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php

$uid=$_SESSION['id'];

$query=mysqli_query($con,"select * from  earnings where sponsor_id='$uid' order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  

$sid=$row['user_id'];
$querys=mysqli_query($con,"select * from  user where id='$sid' order by lastname asc")or die(mysqli_error());
$rows=mysqli_fetch_array($querys);


$sids=$row['transfer_by'];
$queryss=mysqli_query($con,"select * from  user where id='$sids' order by lastname asc")or die(mysqli_error());
$rows2=mysqli_fetch_array($queryss);

$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                      
                                          
                           
                                      
                                      
                                                    <td><?php echo number_format($row['amount'],2)?></td>
                                                    
                                                             <td><?php echo strtoupper($rows['lastname'])?>, <?php echo strtoupper($rows['firstname'])?> <?php echo strtoupper($rows['middlename'])?></td>
                                             <td><?php echo $row['type']?></td>
                                                                                                                 
                                                                                <td><?php echo $row['date_added']?></td>
                                                                                             
                                                                                                                                        	   
                                                                                                                     	   
					         
                                                                                                                                            
                                                                  
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
    
      </div>
     <?php
     
     include('footer.php');
     
     ?>