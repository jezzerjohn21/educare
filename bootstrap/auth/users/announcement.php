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
                    <h4>Announcement Lists </h4>
                    <div class="b">
                        
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal"><font color="white"><i
                  data-feather="plus"></i>Add Announcement</font></button>
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
                              <th>Announcement Title</th>
                               <th>Image</th>
                                <th>Date Started</th>
                                <th>Date End</th>
                                  <th>Date Added</th>
                                   <th>Posted By</th>
                      <th>Action</th>
                     <th></th>
                        
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  announcement  order by date_start desc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  

$en=$row['encoder'];
$count++;
$query1=mysqli_query($con,"select * from  user where id='$en'")or die(mysqli_error());
$row1=mysqli_fetch_array($query1);

				  ?> 
                            
                        
                            
                          <tr>
<td><?php echo $count?></td>
 <td><?php echo $row['title']?></td>
  <td><img width="200px" src="uploads/<?php echo $row['desc1']?>"></td>
                                      <td><?php echo $row['date_start']?></td>                   <td><?php echo $row['date_end']?></td>                                           <td><?php echo $row['date_added']?></td>                                                                                     <td><?php echo $row1['firstname']?> <?php echo $row1['lastname']?></td>                                                                                 	   <td>
                                       	       <a href="edit_ann.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Edit</font></a></td>
                                                                                                                          	   <td>
                                       	       <a href="delete_ann.php?id=<?php echo $row['id'];?>" onClick="javascript:return confirm('are you sure you want to delete this?');" class="btn btn-danger"><font color="white">Delete</font></a></td>                                        	                                          	   
                                                                                                     
                                                                  
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
                <h5 class="modal-title" id="exampleModalLabel">Add Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
 
              	<?php

if(isset($_POST['signin']))
{
    
$title=$_POST['title'];
$desc1=$_POST['desc1'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$date3=date("Y-m-d H:i");
$add_by=$_SESSION['id'];


$button_name=$_POST['button_name'];

	$query21a1=mysqli_query($con,"select * from  announcement where title='$title' and date_start='$date1'")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){



$date=date("Y-m-d H:i");
$ses=$_SESSION['id'];

$temp5678 = explode(".", $_FILES["title1"]["name"]);
$business_id2 ="ID2".round(microtime(true)) . '.' . end($temp5678);
move_uploaded_file($_FILES["title1"]["tmp_name"], "uploads/" . $business_id2);




		  mysqli_query($con,"INSERT INTO announcement(button_name,title,desc1,date_start,date_end,date_added,encoder) VALUES('$button_name','$title','$business_id2','$date1','$date2','$date3','$ses')")or die(mysqli_error($con));
		  
	
		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='announcement.php';
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
        window.location.href='announcement.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Announcement Already Exists!", "warning");
 
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
                  
button_name


             
         
                      
                                         <div class="form-group">
                        <label>Title *</label>
                        <input name="title" type="text" class="form-control" required="">
                      </div>
                                                                 
                    
                                         <div class="form-group">
                        <label>Description *</label>
                                        <input name="title1" type="file" class="form-control" required="">
                      </div>
                                
                                                    <div class="form-group">
                        <label>Button Name *</label>
                        <input name="button_name" type="text" class="form-control" required="">
                      </div>
                               
                                         <div class="form-group">
                        <label>Date Start *</label>
                        <input name="date1" type="date" class="form-control" required="">
                      </div>
                      
                                                   <div class="form-group">
                        <label>Date End *</label>
                        <input name="date2" type="date" class="form-control" required="">
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