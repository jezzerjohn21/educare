<?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row mt-sm-4">
        
              
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    
         	<?php

if(isset($_POST['signin']))
{
  
$file=$_POST['file'];
$tf=$_POST['title'];
$desc1=$_POST['desc1'];

$type2=$_POST['type2'];				






	$pic = $_FILES["image"]["name"];
			if ($pic=="")
			{
				$pic="default.gif";
			}
			else
			{
				$pic = $_FILES["image"]["name"];
				$type = $_FILES["image"]["type"];
				$size = $_FILES["image"]["size"];
				$temp = $_FILES["image"]["tmp_name"];
				$error = $_FILES["image"]["error"];
			
				if ($error > 0){
					die("Error uploading file! Code $error.");
					}
				else{
					if($size > 100000000000) //conditions for the file
						{
						die("Format is not allowed or file size is too big!");
						}
				else
				      {
					move_uploaded_file($temp, "file/".$pic);
						 mysqli_query($con,"INSERT INTO banner(image,title,desc1,type) VALUES('$pic','$tf','$desc1','$type2')")or die(mysqli_error($con));
				      }
					}
			}	

		 
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='add_banner.php';
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

    ?>
    
   
    
    <?php
    
    
    
    
    



}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                    
                    
                    
                    	      <form  method="post" enctype='multipart/form-data'>  
                    
         
                    <div class="card-header">
                                 
                      <h4>Add Banner/Advetisement</h4>
                    </div>
                    <div class="card-body">
                        
          
              <div class="form-group">
                        <label>Title *</label>
                        <input name="title" type="text" class="form-control" required="">
                      </div>
                         
             
                      <div class="form-group">
                        <label>File *</label>
                        <input name="image" type="file" class="form-control" required="">
                      </div>
                         
              <div class="form-group">
                        <label>Description </label>
                        <textarea name="desc1" type="text" class="form-control"></textarea>
                      </div>
                                 
              <div class="form-group">
                        <label>Advertisement/Banner *</label>
                        <select name="type2" type="text" class="form-control" required="">
                            <option>Banner</option>
                               <option>Ads</option>
                            </select>
                      </div>      
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Add</button>
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