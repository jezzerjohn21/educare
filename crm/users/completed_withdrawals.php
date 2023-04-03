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
                    <h4>Completed Withdrawals </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                              <th>#</th>
                                 <th>Transaction Code</th>
                               <th>Fullname</th>
                               <th>Bank/Remittances</th>
                               <th>Account Name</th>
                               <th>Account No.</th>
                               
                                <th>Amount</th>
                                 <th>Transaction Fee</th>
                                           <th>VAT</th>
                                  <th>Total Amount</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Date Deposited</th>
                           <th>In-Charge</th>
                            <th>Date Added</th>
                             
                               <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php

$is=$_SESSION['id'];

$query=mysqli_query($con,"select * from  withdrawals where status='Completed' order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  

$sid=$row['user_id'];
$querys=mysqli_query($con,"select * from  user where id='$sid' order by lastname asc")or die(mysqli_error());
$rows=mysqli_fetch_array($querys);

$sida=$row['approve_by'];
$querysa=mysqli_query($con,"select * from  user where id='$sida' order by lastname asc")or die(mysqli_error());
$rowsa=mysqli_fetch_array($querysa);

$sids=$row['transfer_by'];
$queryss=mysqli_query($con,"select * from  user where id='$sids' order by lastname asc")or die(mysqli_error());
$rows2=mysqli_fetch_array($queryss);

$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                             <td><?php echo $row['transaction_code']?></td>
                                          
                                      <td><?php echo strtoupper($rows['lastname'])?>, <?php echo strtoupper($rows['firstname'])?> <?php echo strtoupper($rows['middlename'])?></td>
                                             <td><?php echo $row['bank_name']?></td>  
                                                    <td><?php echo $row['bank_acc_name']?></td>  
                                                           <td><?php echo $row['bank_acc_no']?></td>  
                                      
                                                                    <td>
                                                          <span class="badge badge-info"><?php echo number_format($row['amount'],2)?></span> 
                                                        
                                                        
                                                        
                                                        </td>
                                                    
                                                    
                                                       <td>
                                                          <span class="badge badge-warning"><?php echo number_format($row['tf'],2)?></span> 
                                                        
                                                        
                                                        
                                                        </td>
                                                                   <td>
                                                          <span class="badge badge-warning"><?php echo number_format($row['vat'],2)?></span> 
                                                        
                                                        
                                                        
                                                        </td>
                                        
                                                                     <td>
                                                          <span class="badge badge-success"><?php echo number_format($row['amount_final'],2)?></span> 
                                                        
                                                             </td>
                                                        
                                                         <td><?php echo $row['status']?></td>         
                                                                            <td><?php echo $row['remarks']?></td>   
                                                                                        <td><?php echo $row['date_deposited']?></td>   
                                                                                        
                                                     <td><?php echo strtoupper($rowsa['lastname'])?>, <?php echo strtoupper($rowsa['firstname'])?> <?php echo strtoupper($rowsa['middlename'])?></td>                                         
                                                                                        <td><?php echo $row['date_added']?></td>
                                                                                             
                                                                                                                                        	   
                                                   <td><a href="edit_withdrawals.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update Transaction</a></td>                                                        	   
                                                                                                                        	   
					         
                                                                                                                                            
                                                                  
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