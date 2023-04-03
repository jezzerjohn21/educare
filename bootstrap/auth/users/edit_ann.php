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
$query=mysqli_query($con,"SELECT * FROM announcement WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];

$title=$_POST['title'];
$desc1=$_POST['desc1'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$button_name=$_POST['button_name'];
	mysqli_query($con,"update announcement set button_name='$button_name',title='$title',desc1='$desc1',date_start='$date1',date_end='$date2' where id='$id'")or die(mysqli_error());
    
    

		  
		  
		  
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

swal("Success!", "Successfully Updated!", "success");
 
}
</script>

		  
		  <?php
		  
		  

	
		 


		





}


?>           
                  <form method="POST"  enctype='multipart/form-data'>  
                    <div class="card-header">
                                 
                      <h4>Update Announcement Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">





                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Title *</label>
                        <input name="title" type="text" value="<?php echo $row['title'];?>" class="form-control" required="">
                      </div>
                   </div>
                      
                      
              

                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Description *</label>
                         <textarea name="desc1" type="text" class="form-control" required=""><?php echo $row['desc1'];?></textarea>
                      </div>
                   </div>
                        
                        
                                            <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Date Start *</label>
                        <input name="date1" type="date" value="<?php echo $row['date_start'];?>" class="form-control" required="">
                      </div>   </div>
                       <div class="col-12 col-md-4 col-lg-4"> 
                                                   <div class="form-group">
                        <label>Date End *</label>
                        <input name="date2" value="<?php echo $row['date_end'];?>" type="date" class="form-control" required="">
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