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


    $code_count=$_POST['code_count'];
	$query21a1=mysqli_query($con,"select * from  code order by id desc")or die(mysqli_error());
$row21a1a=mysqli_fetch_array($query21a1);


$query=mysqli_query($con,"select * from  maintenance")or die(mysqli_error());
$row=mysqli_fetch_array($query);

$rider_count=$row['rider'];
$code_amount=$row['code_amount'];


$id_count=$row21a1a['id'];
if($id_count<=0){
    
    $iidd=0;
}else{
    
    $iidd=$id_count;
    
}
$id_number=$_SESSION['id'];
for( $i=0 ; $i < $code_count ; $i++ ) {
    
    
    $iidd++;
    $rand_start = rand(10,99);
$id_n=date("ymd")."".$rand_start."".$iidd;
$lastname=date("Y-m-d H:i");


 $rand_start2 = rand(10000,99999);

  mysqli_query($con,"INSERT INTO code(amount,generate_by,code,no_rider,date_added,operator_id,remarks,pin) VALUES('$code_amount','$id_number','$id_n','$rider_count','$lastname','0','','$rand_start2')")or die(mysqli_error($con));


}

		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='code_lists.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Generate Code!", "success");
 
}
</script>



<?php
}
    ?>
                
                    
                    
                    
                    
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Generate Operator Code</h4>
                    </div>
                    <div class="card-body">
                        
      
             
             
                      <div class="form-group">
                        <label>No. of codes to generate *</label>
                        <input name="code_count" type="number" min="1" class="form-control" required="">
                      </div>

                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Generate Code</button>
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