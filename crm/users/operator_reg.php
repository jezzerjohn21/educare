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



?>




         	<?php

		  		  
if(isset($_POST['signin']))
{
    $id_number=$_POST['id_number'];
    $pin=$_POST['pin'];
    		  $group_name=$_GET['group_name'];
		  $pos=$_GET['pos'];
		  		  $connect_to=$_GET['id'];
    
$queryfinal=mysqli_query($con,"select * from  groupings where  group_name='$group_name' and operator_id!='0' ")or die(mysqli_error());
$rowfinal=mysqli_num_rows($queryfinal);
    
    if($rowfinal>=14){
        
                   $query=mysqli_query($con,"select DISTINCT group_name,operator_id from groupings where group_name='$group_name' and status='Waiting'")or die(mysqli_error($con));
 while($row=mysqli_fetch_array($query)){
     
 }
        
        
    }
    
    
    
    
    
    $query21a1cg=mysqli_query($con,"select * from  groupings where pos='$pos' and group_name='$group_name' and operator_id='0' ")or die(mysqli_error());
$rowgroup=mysqli_num_rows($query21a1cg);
if($rowgroup>=1){
    
    
    
$query21a1c=mysqli_query($con,"select * from  code where code='$id_number' and status='' and pin='$pin'")or die(mysqli_error());
$row21a1ac=mysqli_num_rows($query21a1c);
$row21a1act=mysqli_fetch_array($query21a1c);
if($row21a1ac>=1){
    
$password=$row21a1act['pin'];
$username=$_POST['id_number'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$status="Active";
$type="2";
$date=date("Y-m-d H:i");
$idd=$_SESSION['id'];

	$query21a1=mysqli_query($con,"select * from  user where username='$username' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){

		 ///mysqli_query($con,"INSERT INTO user(sponsor_id,id_number,firstname,middlename,lastname,status,email,contact,date_added,type,username,password) VALUES('$idd','$id_number','$firstname','$middlename','$lastname','$status','$email','$contact','$date','$type','$username','$password')")or die(mysqli_error($con));
		  
		  $group_name=$_GET['group_name'];
		  $pos=$_GET['pos'];
		  		  $connect_to=$_GET['id'];
		  		  
	$tin=$_POST['tin'];
		  	$address=$_POST['address'];		  

$sql = "INSERT INTO user (address,tin,gender,sponsor_id,id_number,firstname,middlename,lastname,status,email,contact,date_added,type,username,password)
VALUES ('$address','$tin','$gender','$idd','$id_number','$firstname','$middlename','$lastname','$status','$email','$contact','$date','$type','$username','$password')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


        	
$querymaintenance=mysqli_query($con,"select * from  maintenance")or die(mysqli_error());
$rowmaintenance=mysqli_fetch_array($querymaintenance);

$direct=$rowmaintenance['direct_r'];
        	


		  		  mysqli_query($con,"update user set wallet=wallet+'$direct' where id='$idd'")or die(mysqli_error());	
     
     
mysqli_query($con,"INSERT INTO earnings(user_id,sponsor_id,date_added,amount,type) VALUES('$last_id','$idd','$date','$direct','Direct Referrals')")or die(mysqli_error($con));   


		  		  
		  		  
		  	mysqli_query($con,"update groupings set date_added='$date',operator_id='$last_id',connect_to='$connect_to' where group_name='$group_name' and pos='$pos'")or die(mysqli_error());
		  
		  $stat="Used by ".$firstname." ".$lastname;
		  
		  
		  	  	mysqli_query($con,"update code set status='$stat' , operator_id='$last_id' where code='$id_number' ")or die(mysqli_error());
		  	  	
		  	  	
		  	  	
		  	  	

		  	
		  	
		  	  	
		 $queryfinal=mysqli_query($con,"select * from  groupings where  group_name='$group_name' and operator_id!='0' ")or die(mysqli_error());
$rowfinal=mysqli_num_rows($queryfinal);
    
    if($rowfinal>=15){
        
$queryselect=mysqli_query($con,"select * from  groupings where pos='1' and group_name='$group_name'")or die(mysqli_error());
$rowselect=mysqli_fetch_array($queryselect);			  
$op_id_rew=$rowselect['operator_id'];       	
        	
        	
        	
$querymaintenance=mysqli_query($con,"select * from  maintenance")or die(mysqli_error());
$rowmaintenance=mysqli_fetch_array($querymaintenance);

$reward=$rowmaintenance['reward'];
        	
mysqli_query($con,"update user set wallet=wallet+'$reward' where id='$op_id_rew'")or die(mysqli_error());	
     
     
mysqli_query($con,"INSERT INTO reward_history(user_id,amount,date_added,group_name) VALUES('$op_id_rew','$reward','$date','$group_name')")or die(mysqli_error($con));     
        			  
        			  
        			  		  
		  	mysqli_query($con,"update groupings set status='Completed' where group_name='$group_name' and status='Pending'")or die(mysqli_error());
		  	
		  	
		  			  	mysqli_query($con,"update groupings set status='Collected' where group_name='$group_name' and status='Waiting'")or die(mysqli_error());
		  	
		  	
        
$query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='2'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$group_new1=$id_n."1";
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Waiting','$op1c','1')")or die(mysqli_error($con));
 
 
 
 $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='4'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Pending','$op1c','2')")or die(mysqli_error($con));
 
  $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='5'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Pending','$op1c','3')")or die(mysqli_error($con));
 
   $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='8'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Pending','$op1c','4')")or die(mysqli_error($con));
 
 
  
   $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='9'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Pending','$op1c','5')")or die(mysqli_error($con));
 
 
    $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='10'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Pending','$op1c','6')")or die(mysqli_error($con));
 
 
  
    $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='11'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','$op1','$op1date_added','Pending','$op1c','7')")or die(mysqli_error($con));
 
 
 
 
 
 
 mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','8')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','9')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','10')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','11')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','12')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','13')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','14')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new1','0','','Pending','0','15')")or die(mysqli_error($con));
 
 
 
 $group_new2=$id_n."2";
 
 $query2=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='3'")or die(mysqli_error($con));
$row2=mysqli_fetch_array($query2);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row2['operator_id'];
$op1date_added=$row2['date_added'];

$op1c=$row2['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Waiting','$op1c','1')")or die(mysqli_error($con));
 
 
 
     $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='6'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Pending','$op1c','2')")or die(mysqli_error($con));


 
     $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='7'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Pending','$op1c','3')")or die(mysqli_error($con));



     $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='12'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Pending','$op1c','4')")or die(mysqli_error($con));

        
             $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='13'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Pending','$op1c','5')")or die(mysqli_error($con));


  $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='14'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Pending','$op1c','6')")or die(mysqli_error($con));


  $query=mysqli_query($con,"select * from groupings where group_name='$group_name' and pos='15'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
      $rand_start = rand(10,99);
$id_n=date("ymdH")."".$rand_start;
$op1=$row['operator_id'];
$op1date_added=$row['date_added'];
$op1c=$row['connect_to'];  
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','$op1','$op1date_added','Pending','$op1c','7')")or die(mysqli_error($con));



mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','8')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','9')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','10')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','11')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','12')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','13')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','14')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO groupings(group_name,operator_id,date_added,status,connect_to,pos) VALUES('$group_new2','0','','Pending','0','15')")or die(mysqli_error($con));


        
    } 	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	
		  	  	

		  
		$conn->close();
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='operator_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert333();
function JSalert333(){

swal("Success!", "Successfully Register!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='operator_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Username Already Used!", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}
}else{
    ?>
    
    
     <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='operator_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert33();
function JSalert33(){

swal("Ops!", "Incorrect Code or already used!!", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}
}else{
    ?>
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='operator_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert33();
function JSalert33(){

swal("Ops!", "Someone put on this position!", "warning");
 
}
</script>
    
    
    
    <?php
    
    
    
}



}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                    
                    
                    
                    
                    
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Operator Registration<br>
                      <hr>Please provide the following information.</h4>
                    </div>
                    <div class="card-body">
                        
                 <div class="form-group">
                        <label>Operator Code *</label>
                        <input name="id_number"  type="text" class="form-control" required="">
                      </div>
             
                   <div class="form-group">
                        <label>Operator PIN Code *</label>
                        <input name="pin"  type="text" class="form-control" required="">
                      </div>
          
                         

                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" type="text" class="form-control" required="">
                      </div>
               
                                  <div class="form-group">
                        <label>Middlename *</label>
                        <input name="middlename" type="text" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" type="text" class="form-control" required="">
                      </div>
                      
                      
                      
                                         <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Contact no. *</label>
                        <input name="contact" type="text" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" type="text" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>Male</option>
                              <option>Female</option>
                            </select>
                      </div>
                                                              <div class="form-group">
                        <label>Complete Address *</label>
                        <textarea name="address" type="text" class="form-control" required=""></textarea>
                      </div>
                                                   <div class="form-group">
                        <label>TIN No. *</label>
                        <input name="tin" type="text" class="form-control" required="">
                      </div>
                      
                      
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Register</button>
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