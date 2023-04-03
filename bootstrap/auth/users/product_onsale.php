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
                    <h4>Sale Product Lists</h4>
     
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
                        <th>Product Image</th>
                        <th>Product Code</th>
                         <th>Product Name</th>
                        <th>Description</th>
                        <th> Price</th>
                                 <th>Srp Price</th>
                        
                            <th>Category</th>
                                <th>Supplier</th>
                                    <th>Product Sold</th>
                                                 <th>Stocks</th>
                                            <th>On-Sale</th>
                                               
                                                <th>Status</th>
                             
                                 <th>Action</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  products where prod_onsale>=1 order by prod_name asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
$cat=$row['prod_categ'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['prod_sup'];

$querycate2=mysqli_query($con,"select * from  supplier  where id='$cat2' order by name asc")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);
				  ?> 
                            
                        
                            
                          <tr>
<td><?php echo $count?></td>
<td><a href="products/<?php echo $row['prod_image']?>" target="popup" onclick="window.open('products/<?php echo $row['prod_image']?>','name','width=600,height=400')"><img width="100px" height="100px"  src=products/<?php echo $row['prod_image']?>></a></td>
 <td><?php echo $row['prod_code']?></td>
<td><?php echo $row['prod_name']?></td>
 <td><?php echo mb_strimwidth($row['prod_desc'], 0, 30, "...");?></td>

  <td><span class="badge badge-info"> <?php echo number_format($row['prod_price'],2)?></span> </td>

                    <td><span class="badge badge-success"> <?php echo number_format($row['prod_srp'],2)?></span> </td>
                                            
                                         <td><?php echo $rowcateg['name']?></td>
                                      <td><?php echo $rowcateg2['name']?></td>   
                                                  <td><?php echo $row['prod_sold']?></td>     
                                                  
                                                  
                                                        <?php
                                                if($row['prod_qty']>=5){
                                                
                                                ?>
                                                  
                                                <td><?php echo $row['prod_qty']?></td>    
                                                
                                                
                                                      <?php
                                                }else{
                                                
                                                ?>
                                                
                                                             <td bgcolor="orange"><?php echo $row['prod_qty']?></td>  
                                                
                                                              <?php
                                                }
                                                
                                                ?>
                                                
                                                
                                                <?php
                                                if($row['prod_onsale']>=1){
                                                
                                                ?>
                                                
                                                  <td bgcolor="yellow"><?php echo number_format($row['prod_onsale'],0)?>%</td>  
                                                  
                   
                                                     <?php
                                                }else{
                                                
                                                ?>
                                                 <td><?php echo number_format($row['prod_onsale'],0)?>%</td> 
                                                              <?php
                                                }
                                                
                                                ?>
                                                               <td><?php echo $row['prod_status']?></td>                     
                                        
                                                                                                                            	   <td>
                                       	       <a href="edit_product.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Edit</font></a></td>
                                                                                                                          	   <td>
                                       	       <a href="delete_prod.php?id=<?php echo $row['id'];?>" onClick="javascript:return confirm('are you sure you want to delete this?');" class="btn btn-danger"><font color="white">Delete</font></a></td>                                        	   
                                                                                                     
                                                                  
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