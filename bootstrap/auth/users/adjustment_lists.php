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
                    <h4>Adjustment Lists</h4>
     
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
              		<tr>
							<th>Transaction Code</th>
										<th>Requestor (Seller Information)
</th>
<th>Product/Item Code</th>
							<th>Action</th>
					
							<th>Quantity to add or subtract</th>
								<th>Reason</th>
									<th>Requestor Remarks</th>
											<th>Date of Request</th>
							<th>Approver (Sales Agent)</th>
									<th>Approver Remarks</th>
							<th>Status</th>
								<th>Action</th>
						</tr>
                        </thead>
                        <tbody>
                            
                           			
					    	<?php

$com=$_SESSION['aid'];




if($rowuser['type']==0){
$query=mysqli_query($con,"select * from  adjustment where status!='Pendings' order by id desc")or die(mysqli_error());
}else{
    
   $query=mysqli_query($con,"select * from  adjustment where status!='Pendings' and sales_agent='$com' order by id desc")or die(mysqli_error()); 
    
}



while($row=mysqli_fetch_array($query)){  


$count++;
$cat=$row['prod_id'];

$querycate=mysqli_query($con,"select * from  products  where id='$cat'")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['added_by'];

$querycate2=mysqli_query($con,"select * from  user  where id='$cat2' ")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);


$cat2a=$row['sales_agent'];

$querycate2a=mysqli_query($con,"select * from  user  where id='$cat2a' ")or die(mysqli_error());
$rowcateg2a=mysqli_fetch_array($querycate2a);




$cat2aid=$row['store_id'];

$querycate2ad=mysqli_query($con,"select * from  user  where id='$cat2aid' ")or die(mysqli_error());
$rowcateg2ad=mysqli_fetch_array($querycate2ad);

				  ?>  
					    
					    
					    
					    
					    
					    <?php
					    
		
					    
					    
					    if($row['status']=="Pending"){
					    
					    ?>
					    
					    
						<tr>
							<td class="text-center">
								<a href=""  class="order_id"><?php echo $row['code']?></a> <!--Order ID-->
							</td>
							<td><b><?php echo $rowcateg2ad['business_name']?></b> <?php echo $rowcateg2a['firstname']?> <?php echo $rowcateg2a['lastname']?></td>
<td>( <?php echo $rowcateg['prod_no']?> ) <?php echo $rowcateg['prod_name']?></td>
 					
					<td><?php echo $row['type']?></td>
			
					<td><?php echo $row['qty']?></td>
					<td><?php echo $row['reason']?></td>
							<td><?php echo $row['remarks']?></td>
				
					
					
					
					<td><?php echo $row['date_added']?></td>
                  		<td><?php echo $rowcateg2a['firstname']?> <?php echo $rowcateg2a['lastname']?></td>
                     		<td class="text-center"><?php echo $row['remarks_sa']?></td> <!--Status-->
                     		
                     		
							<td class="text-center"><span class="active"><?php echo $row['status']?></span></td> <!--Status-->
							
							
							
							
								   <td><a href="edit_adjustment.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Update</font></a></td>
						</tr>
						
						
									    <?php
					    }else{
					    
					    ?>
					    
									<tr>
							<td class="text-center">
								<a href=""  class="order_id"><?php echo $row['code']?></a> <!--Order ID-->
							</td>
							<td><b><?php echo $rowcateg2ad['business_name']?></b> <?php echo $rowcateg2a['firstname']?> <?php echo $rowcateg2a['lastname']?></td>
<td>( <?php echo $rowcateg['prod_no']?> ) <?php echo $rowcateg['prod_name']?></b> </td>
 					
					<td><b><?php echo $row['type']?></b> </td>
			
					<td><b><?php echo $row['qty']?></b> </td>
					<td><b><?php echo $row['reason']?></b> </td>
							<td><b><?php echo $row['remarks']?></b> </td>
				
					
					
					
					<td><b><?php echo $row['date_added']?></b> </td>
                  		<td><b><?php echo $rowcateg2a['firstname']?> <?php echo $rowcateg2a['lastname']?></b> </td>
                     		<td class="text-center"><b><?php echo $row['remarks_sa']?></b> </td> <!--Status-->
                     		
                     		
							<td class="text-center"><span class="active"><b><?php echo $row['status']?></b> </span></td> <!--Status-->
							
							
							
							
								   <td><a href="edit_adjustment.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Update</font></a></td>
						</tr>
						
						
						
						  <?php
					    }
					    
					    ?>
						
						
						
						
						
						
						
						
						
						
						
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
$status="Active";

	$query21a1=mysqli_query($con,"select * from  products where prod_code='$prod_code' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){



$temp56789 = explode(".", $_FILES["prod_image"]["name"]);
$business_dti ="DTI".round(microtime(true)) . '.' . end($temp56789);
move_uploaded_file($_FILES["prod_image"]["tmp_name"], "products/" . $business_dti);


		  mysqli_query($con,"INSERT INTO products(prod_image,prod_code,prod_name,prod_desc,prod_price,prod_srp,prod_categ,prod_sup,prod_onsale,prod_status) VALUES('$business_dti','$prod_code','$prod_name','$prod_desc','$prod_price','$prod_srp','$prod_categ','$prod_sup','$prod_onsale','$status')")or die(mysqli_error($con));
		  
		  
		  

		  
		
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
                <div class="form-group">
                        <label>Product Image *</label>
                        <input name="prod_image" type="file" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Product Code *</label>
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
                                                                                                                                        <div class="form-group">
                        <label>Supplier</label>
                                   <select name="prod_sup" type="text" class="form-control" required="">
                                         <option value="">--Please Select Supplier--</option>
                           				<?php

$querycate=mysqli_query($con,"select * from  supplier  order by name asc")or die(mysqli_error());
while($rowcateg=mysqli_fetch_array($querycate)){  

				  ?> 
                        <option value='<?php echo $rowcateg['id'];?>'><?php echo $rowcateg['name'];?></option>
                 <?php
}
                 ?>
                        
                </select>
                      </div>
                      
                      <hr>
                      
                        <h3>Price Information</h3>
             
                      
                               <div class="form-group">
                        <label>Price *</label>
                        <input pattern="^[a-zA-Z0-9\.]*$" name="prod_price" type="text" class="form-control" required="">
                      </div>
               
                                  <div class="form-group">
                        <label>Srp Price *</label>
                        <input name="prod_srp" pattern="^[a-zA-Z0-9\.]*$" type="text" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>On Sale (percentage: ex. 10 = 10%) </label>
                        <input name="prod_onsale" type="text" class="form-control" required="">
                      </div>
                      
             
      
      
      
      
      
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button name="signin" type="submit" class="btn btn-primary">Create Account</button>
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