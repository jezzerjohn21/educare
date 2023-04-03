<?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row">
        
              
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                 
              <?php
              
              
              
$sid=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM products WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
$cat=$row['prod_categ'];

$querycate=mysqli_query($con,"select * from  category  where id='$cat' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);


$cat2=$row['prod_sup'];

$querycate2=mysqli_query($con,"select * from  supplier  where id='$cat2' order by name asc")or die(mysqli_error());
$rowcateg2=mysqli_fetch_array($querycate2);
?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];



$prod_image=$_FILES["prod_image"]["name"];



if($prod_image!=""){

$prod_code=$_POST['prod_code'];
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prod_price=$_POST['prod_price'];
$prod_srp=$_POST['prod_srp'];
$prod_categ=$_POST['prod_categ'];
$prod_sup=$_POST['prod_sup'];
$prod_onsale=$_POST['prod_onsale'];
$status=$_POST['status'];

$temp56789 = explode(".", $_FILES["prod_image"]["name"]);
$business_dti ="P".round(microtime(true)) . '.' . end($temp56789);
move_uploaded_file($_FILES["prod_image"]["tmp_name"], "products/" . $business_dti);


	mysqli_query($con,"update products set prod_image='$business_dti',prod_code='$prod_code',prod_name='$prod_name',prod_desc='$prod_desc',prod_price='$prod_price',prod_srp='$prod_srp'
,prod_categ='$prod_categ',prod_sup='$prod_sup',prod_onsale='$prod_onsale',prod_status='$status' where id='$id'")or die(mysqli_error());

}	  else{
    
    $prod_code=$_POST['prod_code'];
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prod_price=$_POST['prod_price'];
$prod_srp=$_POST['prod_srp'];
$prod_categ=$_POST['prod_categ'];
$threshold=$_POST['threshold'];
$points=$_POST['points'];
$status=$_POST['status'];

$upon=date("Y-m-d H:i");
$up=$_SESSION['id'];
	mysqli_query($con,"update products set prod_desc='$prod_desc',prod_code='$prod_code',prod_name='$prod_name',prod_price='$prod_price',points='$points'
,prod_categ='$prod_categ',threshold='$threshold',prod_status='$status',update_by='$up',update_on='$upon' where id='$id'")or die(mysqli_error());
    
    
}
		  
		  
		  
		  
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

swal("Success!", "Successfully Updated!", "success");
 
}
</script>

		  
		  <?php
		  
		  

	
		 


		





}


?>           
                  <form method="POST"  enctype='multipart/form-data'>  
                    <div class="card-header">
                                 
                      <h4>Update Product Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">

 <div class="col-12 col-md-4 col-lg-12"> 
<a href="add_image.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-xs"><font color="white">Add Image</font></a>
   </div>
         
         
         
         
         
         
                                    				<?php

$id3=$row['id'];

$query2=mysqli_query($con,"select * from  product_image  where prod_id='$id3'")or die(mysqli_error());
while($row2=mysqli_fetch_array($query2)){  


$count++;

				  ?> 
				  
				  
				  
                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                  <img width="200px" height="200px"  src=products/<?php echo $row2['image']?>>
                      </div>
                   </div>
				  
				  
				                             				<?php

}

				  ?> 
         
         
         
           <div class="col-12 col-md-4 col-lg-12"> 
             </div>
                      
         

                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>SKU *</label>
                        <input name="prod_code" type="text" value="<?php echo $row['prod_code'];?>" class="form-control" required="">
                      </div>
                   </div>
                      
                      
                                                  <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Product Name *</label>
                        <input name="prod_name" type="text" value="<?php echo $row['prod_name'];?>" class="form-control" required="">
                      </div>
                   </div>
                                 
      
                                                 <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Product Descriptions *</label>
                        <textarea name="prod_desc" type="text" value="" class="form-control" required=""><?php echo $row['prod_desc'];?></textarea>
                      </div>
                   </div>
                            
 
                          
                   
                   
                   
                                                                  <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Price *</label>
                        <input name="prod_price" type="text" value="<?php echo $row['prod_price'];?>" class="form-control" required="">
                      </div>
                   </div>
                                                                                                                                             <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Threshold *</label>
                        <input name="threshold" type="text" value="<?php echo $row['threshold'];?>" class="form-control" required="">
                      </div>
                   </div>     
                                        <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Points *</label>
                        <input name="points" type="text" value="<?php echo $row['points'];?>" class="form-control" required="">
                      </div>
                   </div>  
                            
                               <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Category *</label>
                                                     <select name="prod_categ" type="text" class="form-control" required="">
                                                         
                                                         
                                                         
                                                         
                                         <option value="<?php echo $rowcateg['id'];?>"><?php echo $rowcateg['name'];?></option>
                           				<?php

$querycate=mysqli_query($con,"select * from  category  where company='0' order by name asc")or die(mysqli_error());
while($rowcateg=mysqli_fetch_array($querycate)){  

				  ?> 
                        <option value='<?php echo $rowcateg['id'];?>'><?php echo $rowcateg['name'];?></option>
                 <?php
}
                 ?>
                        
                </select>
                      </div>
                   </div>

                                       
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Status</label>
                        <select name="status" type="text" class="form-control" required="">
                            <option><?php echo $row['prod_status'];?></option>
                            <option>Active</option>
                              <option>In-active</option>
                            </select>
                      </div>
                               </div>
                               
                               
               
                    </div>
                               </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Update Information</button>
                    </div>
                  </form>
                </div>
               
              </div>
            
              
              
              
              
              
             
            </div>
            
            
            
            
            
            
            
          </div>
        </section>
       
      </div>
     <?php
     
     include('footer.php');
     
     ?>