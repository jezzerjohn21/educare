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
                    <h4>CRM Transactions</h4>
       
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
          	<tr>
							<th>ID</th>
								<th>Date</th>
							<th>Customer Name</th>
							<th>Total Amount</th>
							
							<th>Store Name</th>
							
													<th>Payment</th>
												<th>Reference No.</th>
						<th>Message</th>
											<th>Payment Status</th>												
							<th>Status</th>
						</tr>
                        </thead>
                        <tbody>
                            
                           								    	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select * from  sales_crm order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
$cat=$row['prod_categ'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['added_by'];

$querycate2=mysqli_query($con,"select * from  user  where id='$cat2' ")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);


$cat2a=$row['store'];

$querycate2a=mysqli_query($con,"select * from  user  where id='$cat2a' ")or die(mysqli_error());
$rowcateg2a=mysqli_fetch_array($querycate2a);



$cat2a2=$row['user_id'];



$querycate2a2=mysqli_query($con,"select * from  customer  where id='$cat2a2' ")or die(mysqli_error());
$rowcateg2a2=mysqli_fetch_array($querycate2a2);

				  ?>  
					    
					    
					    
					    
					    
					    
					    
					    
						<tr>
							<td class="text-center">
								<a href="receipt_view2.php?id=<?php echo $row['id'];?>&login=<?php echo $_GET['login'];?>&cus=<?php echo $row['user_id'];?>&invoice=<?php echo $row['invoice'];?>"   class="order_id"><?php echo $row['invoice']?></a> <!--Order ID-->
							</td>
							
																									  <td><?php 
				  
				  $date=date_create($row['date_added']);
echo date_format($date,"M d, Y H:ia");
				  
		?>	</td>  
				  <td><?php echo $rowcateg2a2['firstname']?> <?php echo $rowcateg2a2['lastname']?></td>  

							<td>₱  <?php echo number_format($row['total'],2)?></td> <!--Price-->
							
						
						       	     <td><?php echo $rowcateg2a['business_name']?></td>   
                    
						       	     <td><?php echo $row['payment']?></td>   
                      <td><?php echo $row['ref']?></td>   
                      <td><?php echo $row['message']?></td>   
                                     <td><?php echo $row['status3']?></td>   
                     
							<td class="text-center"><span class="active"><?php 	if($row['status']=="Paid"){
										
										
										echo "Completed";
										
										}else{
										    
										    	echo $row['status'];
										}
										
										?></span></td> <!--Status-->
							
							
							
						</tr>
						
							
							
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
$prod_image=$_POST['prod_image'];
$prod_code=$_POST['prod_code'];
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prod_price=$_POST['prod_price'];
$prod_srp=$_POST['prod_srp'];
$prod_categ=$_POST['prod_categ'];
$prod_sup=$_POST['prod_sup'];
$prod_onsale=$_POST['prod_onsale'];
$prod_no=$_POST['prod_no'];
$prod_unit=$_POST['prod_unit'];
$status="Active";
$threshold=$_POST['threshold'];
$points=$_POST['points'];
	$query21a1=mysqli_query($con,"select * from  products where prod_code='$prod_code' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){
$added_by=$_SESSION['id'];
$added_on=date("Y-m-d H:i");

$temp56789 = explode(".", $_FILES["prod_image"]["name"]);
$business_dti ="DTI".round(microtime(true)) . '.' . end($temp56789);
move_uploaded_file($_FILES["prod_image"]["tmp_name"], "products/" . $business_dti);


		  mysqli_query($con,"INSERT INTO products(prod_desc,added_by,added_on,points,threshold,prod_unit,prod_no,prod_image,prod_code,prod_name,prod_price,prod_categ,prod_status) VALUES('$prod_desc','$added_by','$added_on','$points','$threshold','$prod_unit','$prod_no','$business_dti','$prod_code','$prod_name','$prod_price','$prod_categ','$status')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='product_all.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Register!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='product_all.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Code Already Used!", "warning");
 
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
                  
                  

             
                        <input name="id_number" value="<?php echo $id_n;?>" type="hidden" class="form-control" readonly="">
                           <h3>Product Information </h3>
                    <p>Please fill up the form below. </p>
                    
                                          <?php
                      
	$query21a1=mysqli_query($con,"select * from  products ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
                      
             
       if($row21a1a<=0){   
                       $number = 1; 
       }else{
           
            $number = $row21a1a+1; 
       }

  
  
$number = sprintf('%06d',$number);
                      
                      
                      ?>
                                        
                                      
                        <input name="prod_no" value="<?php echo $number;?>" type="hidden" class="form-control" required="">
                     
                    
                <div class="form-group">
                        <label> Image *</label>
                        <input name="prod_image" type="file" class="form-control" required="">
                      </div>
                      
                      

                      
                      
                      
                      
                                         <div class="form-group">
                        <label>SKU *</label>
                        <input name="prod_code" type="text" class="form-control" required="">
                      </div>
                      
                                                       <div class="form-group">
                        <label>Product Name</label>
                        <input name="prod_name" type="text" class="form-control" required="">
                      </div>
             
              
           <div class="form-group">
                        <label>Product Description</label>
                        <textarea name="prod_desc" type="text" class="form-control" required=""></textarea>
                      </div>
             
                                                                       <div class="form-group">
                        <label>Category</label>
                                   <select name="prod_categ" type="text" class="form-control" required="">
                                         <option value="">--Please Select Category--</option>
                           				<?php

$querycate=mysqli_query($con,"select * from  category  order by name asc")or die(mysqli_error());
while($rowcateg=mysqli_fetch_array($querycate)){  

				  ?> 
                        <option value='<?php echo $rowcateg['id'];?>'><?php echo $rowcateg['name'];?></option>
                 <?php
}
                 ?>
                        
                </select>
                      </div>
                                                                                
                      
                      <hr>
                      
             
                                                                   <div class="form-group">
                        <label>Product Unit</label>
                        <input name="prod_unit" type="text" class="form-control" required="">
                      </div>
                      
                      
                               <div class="form-group">
                        <label>Price *</label>
                        <input pattern="^[a-zA-Z0-9\.]*$" name="prod_price" type="text" class="form-control" required="">
                      </div>
               
                                  <div class="form-group">
                        <label>Threshold *</label>
                        <input name="threshold" pattern="^[a-zA-Z0-9\.]*$" type="text" class="form-control" required="">
                      </div>
                      
         
                                      <div class="form-group">
                        <label>Points *</label>
                        <input name="points" pattern="^[a-zA-Z0-9\.]*$" type="text" class="form-control" required="">
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