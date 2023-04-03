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
                    <h4>Rebates </h4>
                    <div class="b">
                     
                        
                        
           </div>
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
						<tr>
							<th>Ticket ID</th>
								<th>Username</th>
							<th>Subject</th>
						<th>Date Added</th>
						</tr>
					</thead>
					<tbody>
					    
					    	<?php

$com=$_GET['login'];

$query=mysqli_query($con,"select * from  ticket where  ticket_rep='' order by id desc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;

$com2=$row['user_id'];

if($row['user_id']!=''){
    $query2=mysqli_query($con,"select * from  customer where id='$com2'")or die(mysqli_error());
$row2=mysqli_fetch_array($query2);
}else{
$query2=mysqli_query($con,"select * from  user where id='$com2'")or die(mysqli_error());
$row2=mysqli_fetch_array($query2);

}

				  ?>  
					    
					    
					    
					    
					    
					    
					    
					    
						<tr>
							<td class="text-center">
								<a href="edit_support.php?id=<?php echo $row['ticket_no'];?>&login=<?php echo $_GET['login'];?>"  class="order_id"><?php echo $row['ticket_no']?> </a> <!--Order ID-->
							</td>
							<td><?php echo $row2['firstname']?> <?php echo $row2['lastname']?></td>
<td><?php echo $row['title']?></td>
<td><?php echo $row['date_added']?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Rebates</h5>
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