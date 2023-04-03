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
                    <h4>Support </h4>
                    <div class="b">
                     
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    			    	<?php

$com=$_GET['login'];
$ticket_no=$_GET['id'];
$query=mysqli_query($con,"select * from  ticket where ticket_no='$ticket_no' order by id asc")or die(mysqli_error());
$row=mysqli_fetch_array($query);


$count++;

				  ?>  
                                        
                      	<div class="product-information-container">

				<div class="row">
					<div class="col-12">
						<span class="enter-product-info-title">Ticket #: <?php echo $row['ticket_no'];?></span>
					</div>
								<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><b><?php echo $row['title'];?></b></span>
						<hr>
					</div>
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><?php echo $row['message'];?></span>
					</div>
							<div class="col-8 mt-p5">	</div>
				<div class="col-4 mt-p5">
						<span class="please-fill-up-form-title">Date Posted: <?php echo $row['date_added'];?></span>
					</div>
				</div>

			</div>                



	<?php

$com=$_GET['login'];
$ticket_no=$_GET['id'];
$query=mysqli_query($con,"select * from  ticket where ticket_rep='$ticket_no' order by id asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){

$ticket_no22=$row['user_id'];
$ticket_no222=$row['id'];
if($row['type']==''){

$query2=mysqli_query($con,"select * from  user where id='$ticket_no22'")or die(mysqli_error());
}else{
  $query2=mysqli_query($con,"select * from  customer where id='$ticket_no22'")or die(mysqli_error());  
    
    
}
$row2=mysqli_fetch_array($query2);

$count++;

	mysqli_query($con,"update ticket set done='1' where id='$ticket_no222'")or die(mysqli_error());
    
				  ?>  
                                        
                      	<div class="product-information-container">

				<div class="row">
		
								<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><b><font color="green"><?php echo $row2['firstname'];?> <?php echo $row2['lastname'];?> </font></b></span>
						<hr>
					</div>
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title"><?php echo $row['message'];?></span>
					</div>
							<div class="col-8 mt-p5">	</div>
				<div class="col-4 mt-p5">
						<span class="please-fill-up-form-title">Date Posted: <?php echo $row['date_added'];?></span>
					</div>
				</div>

			</div>                

	<?php
}

				  ?>  


	<?php

if(isset($_POST['signin']))
{
    $com=$rowuser['id'];
$prod_image=$_POST['title'];
$message=$_POST['message'];
$ticket_no=$_GET['id'];

$added_on=date("Y-m-d H:i");

		  mysqli_query($con,"INSERT INTO ticket(type,title,message,date_added,user_id,ticket_no,status,ticket_rep) VALUES('','$prod_image','$message','$added_on','$com','$ticket_no','Pending','$ticket_no')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='support.php?login='<?php echo $_GET['login'];?>'&id='<?php echo $_GET['id'];?>';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Ticket Successfully Sent!", "success");
 
}
</script>



    
    <?php
    
    
    
 

}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           

			<div class="product-information-container">

				<div class="row">
			
					<div class="col-12 mt-p5">
						<span class="please-fill-up-form-title">Message</span>
					</div>
					<div class="col-12 mt-1">

						<!-- <form action=""> -->
				                  <form method="POST"  enctype='multipart/form-data'>  
				                  
	
						<div class="mt-p5">
								<textarea type="text" id="name" name="message" placeholder="Message" class="form-control" required></textarea>
							</div>
							<div class="row reverse-order">
							
								<div class="col-12 col-sm-12 col-lg-12 mt-1">
									<button name="signin" type="submit" class="add-product">Reply</button>
								</div>
							</div>
						</form>

					</div>
				</div>

			</div>
		
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
                <h5 class="modal-title" id="exampleModalLabel">Add Rebates</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
 
              	<?php

if(isset($_POST['signin222222']))
{
    
    

    
    
$invoice=$_POST['name'];
$percentage=$_POST['percentage'];
$type=$_POST['type'];
$exp=$_POST['exp'];
	$query21a1=mysqli_query($con,"select * from  rebates where name='$invoice' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){



$date=date("Y-m-d H:i");
$ses=$_SESSION['id'];

		  mysqli_query($con,"INSERT INTO rebates(expiration,name,percentage,type) VALUES('$exp','$invoice','$percentage','$type')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='rebates.php';
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
        window.location.href='rebates.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Rebates Name Already Exists!", "warning");
 
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
                        <label>Rewards Name *</label>
                        <input name="name" type="text" class="form-control" required="">
                      </div>
                                                                 
      
             
                                         <div class="form-group">
                        <label>Amount/Percentage*</label>
                        <input name="percentage" type="text" class="form-control" required="">
                      </div>
                                         <div class="form-group">
                        <label>Exxpiration*</label>
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