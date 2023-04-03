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
                    <h4>Product Tags Lists</h4>
                    <div class="b">
                        
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal"><font color="white"><i
                  data-feather="plus"></i>Add Tags</font></button>
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
                        <th>Category</th>
                        
                                 <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php

$id3=$_GET['id'];

$query=mysqli_query($con,"select * from  product_tag  where dis_id='$id3'")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
$id=$row['categ_id'];

$querycate=mysqli_query($con,"select * from  category where id='$id' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);  



				  ?> 
                            
                        
                            
                          <tr>
<td><?php echo $count?></td>






<td><?php echo $rowcateg['name']?></td>   




<td><a href="delete_product_tags.php?id=<?php echo $row['id'];?>&id2=<?php echo $_GET['id'];?>" onClick="javascript:return confirm('are you sure you want to delete this?');" class="btn btn-danger"><font color="white">Delete</font></a></td>                                        	   
                                                                                                     
                                                                  
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
                <h5 class="modal-title" id="exampleModalLabel">Add Tags</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
 
              	<?php

if(isset($_POST['signin']))
{
$prod_image=$_POST['prod_categ'];
$prod_code=$_GET['id'];

$query2=mysqli_query($con,"select * from  product_tag  where dis_id='$prod_code' and categ_id='$prod_image'")or die(mysqli_error());
$row2=mysqli_num_rows($query2);


if($row2<=0){
		  mysqli_query($con,"INSERT INTO product_tag(categ_id,dis_id) VALUES('$prod_image','$prod_code')")or die(mysqli_error($con));
		  
}	  
		  

		 
	echo "<script>window.location='add_product_tags.php?id=$prod_code'</script>";   
		
?>


    
    <?php
    
    
    
    
    




}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                  
              
                      <form method="POST"  enctype='multipart/form-data'>  
              <div class="modal-body">
                  
                  

             
                        <input name="id_number" value="<?php echo $id_n;?>" type="hidden" class="form-control" readonly="">
                    
                    
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
                        <label>Category</label>
                                   <select name="prod_categ" type="text" class="form-control" required="">
                                         <option value="">--Please Select Category--</option>
                           				<?php

$querycate=mysqli_query($con,"select * from  category where company='0' order by name asc")or die(mysqli_error());
while($rowcateg=mysqli_fetch_array($querycate)){  

				  ?> 
                        <option value='<?php echo $rowcateg['id'];?>'><?php echo $rowcateg['name'];?></option>
                 <?php
}
                 ?>
                        
                </select>
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