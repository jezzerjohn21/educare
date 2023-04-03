<?php

include('header.php');

?>
<style>
    
    div.b {
  position: absolute;
  right: 0;
  width: 200px;


} 
    
</style>
      <!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Replenishments </h4>
                    <div class="b">
                        
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal"><font color="white"><i
                  data-feather="plus"></i>Add Stocks</font></button>
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
                              <th>Invoice Number</th>
                        <th>Product Code</th>
                         <th>Product Name</th>
                             <th> Quantity</th>
                        <th> Total Amount</th>
               <th>Date Purchased</th>
                <th>Date Recieved</th>
             <th>Remarks</th>
             
                                   <th>Date Added</th>
                                    <th>In-charge</th>
                
                        
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  stockin  order by date_purchase asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
$cat=$row['prod_id'];

$querycate=mysqli_query($con,"select * from  products  where id='$cat' ")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);



$cat2=$row['added_by'];

$querycate2=mysqli_query($con,"select * from  user  where id='$cat2' ")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);

				  ?> 
                            
                        
                            
                          <tr>
<td><?php echo $count?></td>
 <td><?php echo $row['invoice']?></td>
 <td><?php echo $rowcateg['prod_code']?></td>
 <td><?php echo $rowcateg['prod_name']?></td>
   <td><span class="badge badge-info"> <?php echo number_format($row['qty'],0)?></span> </td>
  <td><span class="badge badge-success"> <?php echo number_format($row['amount'],2)?></span> </td>
                            <td><?php echo $row['date_purchase']?></td>   
                             <td><?php echo $row['date_receive']?></td>
                                  <td><?php echo $row['remarks']?></td>
                                               <td><?php echo $row['date_added']?></td>
                                               
                                               
                                                 <td><?php echo $rowcateg2['firstname']?> <?php echo $rowcateg2['lastname']?></td>
                                               
                                    
                                                                                                                       	   
                                                                                                     
                                                                  
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
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
 
              	<?php

if(isset($_POST['signin']))
{
    
    

    
    
$invoice=$_POST['invoice'];
$prod_code=$_POST['prod_code'];
$amount=$_POST['amount'];
$date_purchase=$_POST['date_purchase'];
$date_receive=$_POST['date_receive'];
$remarks=$_POST['remarks'];
$qty=$_POST['qty'];

	$query21a1=mysqli_query($con,"select * from  stockin where invoice='$invoice' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){


	mysqli_query($con,"update products set prod_qty=prod_qty+'$qty' where id='$prod_code'")or die(mysqli_error());

$date=date("Y-m-d H:i");
$ses=$_SESSION['id'];

		  mysqli_query($con,"INSERT INTO stockin(added_by,date_added,invoice,prod_id,amount,date_purchase,date_receive,remarks,qty) VALUES('$ses','$date','$invoice','$prod_code','$amount','$date_purchase','$date_receive','$remarks','$qty')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='stockin.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Stockin!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='stockin.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Invoice Number Already Used!", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}



}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                  
              
                      <form method="POST"  enctype='multipart/form-data'>  
              <div class="modal-body">
                  



             
                           <h3>Stockin Information </h3>
                    <p>Please fill up the form below. </p>
          
                      
                                         <div class="form-group">
                        <label>Invoice Number *</label>
                        <input name="invoice" type="text" class="form-control" required="">
                      </div>
                                                                                           <div class="form-group">
                        <label>Product</label>
                                   <select name="prod_code" type="text" class="form-control" required="">
                                         <option value="">--Please Select Products--</option>
                           				<?php

$querycate=mysqli_query($con,"select * from  products  order by prod_name asc")or die(mysqli_error());
while($rowcateg=mysqli_fetch_array($querycate)){  

				  ?> 
                        <option value='<?php echo $rowcateg['id'];?>'><?php echo $rowcateg['prod_code'];?> || <?php echo $rowcateg['prod_name'];?></option>
                 <?php
}
                 ?>
                        
                </select>
                      </div>
                                                                <div class="form-group">
                        <label>Quantity</label>
                        <input name="qty" type="text" class="form-control" required="">
                      </div>
                                                       <div class="form-group">
                        <label>Amount</label>
                        <input name="amount" type="text" class="form-control" required="">
                      </div>
                         <div class="form-group">
                        <label>Date Purchase</label>
                        <input name="date_purchase" type="date" class="form-control" required="">
                      </div>
             
                <div class="form-group">
                        <label>Date Received</label>
                        <input name="date_receive" type="date" class="form-control" required="">
                      </div>
             
              
           <div class="form-group">
                        <label>Remarks</label>
                        <textarea name="remarks" type="text" class="form-control" required=""></textarea>
                      </div>
             
                                                                   
      
      
      
      
      
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button name="signin" type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              
                   </form>
            </div>
          </div>
        </div>
      </div>
    <?php
    include('footer.php');
    
    ?>