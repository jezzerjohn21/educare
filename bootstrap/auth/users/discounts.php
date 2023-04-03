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
                    <h4>Discounts Lists </h4>
                    <div class="b">
                        
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal"><font color="white"><i
                  data-feather="plus"></i>Add Discount </font></button>
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
                              <th>Discount Name</th>
                               <th>Percentage/Amount</th>
                              
                                              <th>Type</th>
                                                                      <th>User Type</th>
                                                  <th>Expiration</th>
                                   <th>Category Tags</th>
                    
                      <th>Action</th>
                     <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  discounts where company='0' order by name asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;


				  ?> 
                            
                        
                            
                          <tr>
<td><?php echo $count?></td>
 <td><?php echo $row['name']?></td>
  <td><?php echo $row['percentage']?></td>
                                      <td><?php echo $row['type']?></td> 
                                                    <td><?php echo $row['type2']?></td><td><?php echo $row['expiration']?></td>                         
                                      
                                      
                                      
                                                    <td><?php 
                                                    
                                                    
                                                    $id3=$row['id'];
$query2=mysqli_query($con,"select * from  discount_tag  where dis_id='$id3'")or die(mysqli_error());
while($row2=mysqli_fetch_array($query2)){  


$count++;
$id=$row2['categ_id'];

$querycate=mysqli_query($con,"select * from  category where id='$id' order by name asc")or die(mysqli_error());
$rowcateg=mysqli_fetch_array($querycate);  
 

                                                    
                                                    echo " ".$rowcateg['name'].",";
                                                    
} 
                                                    
                                                    
                                                    
                                                    ?></td>   
                                      
                                      
                                      
                                      	   <td>
                                       	       <a href="add_discount_tags.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Add Tags</font></a></td>
                                      
                                      
                                      <td>
                                       	       <a href="edit_discounts.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Edit</font></a></td>
                                                                                                                          	   <td>
                                       	       <a href="delete_discounts.php?id=<?php echo $row['id'];?>" onClick="javascript:return confirm('are you sure you want to delete this?');" class="btn btn-danger"><font color="white">Delete</font></a></td>                                        	                                          	   
                                                                                                     
                                                                  
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
                <h5 class="modal-title" id="exampleModalLabel">Add Discounts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
 
              	<?php

if(isset($_POST['signin']))
{
    
    

    
    
$invoice=$_POST['name'];
$percentage=$_POST['percentage'];
$type=$_POST['type'];
$type2=$_POST['type2'];
$exp=$_POST['exp'];
	$query21a1=mysqli_query($con,"select * from  discounts where name='$invoice' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){



$date=date("Y-m-d H:i");
$ses=$_SESSION['id'];

		  mysqli_query($con,"INSERT INTO discounts(type2,expiration,name,percentage,type) VALUES('$type2','$exp','$invoice','$percentage','$type')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='discounts.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Added!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='discounts.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Discount Name Already Exists!", "warning");
 
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
                  



             
         
                      
                                         <div class="form-group">
                        <label>Discount Name *</label>
                        <input name="name" type="text" class="form-control" required="">
                      </div>
                                                                 
      
             
                                         <div class="form-group">
                        <label>Amount/Percentage*</label>
                        <input name="percentage" type="text" class="form-control" required="">
                      </div>
                                         <div class="form-group">
                        <label>Expiration*</label>
                        <input name="exp" type="date" class="form-control" required="">
                      </div>
                                          
                                         <div class="form-group">
                        <label>Type *</label>
                        <select name="type" type="text" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>Percentage</option>
                              <option>Fixed</option>
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