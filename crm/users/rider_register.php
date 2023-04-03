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
    $id_number2=$_POST['id_number2'];
    $pin=$_POST['pin'];
    		  $group_name=$_GET['group_name'];
		  $pos=$_GET['pos'];
		  		  $connect_to=$_GET['id'];

    
    
$querycode=mysqli_query($con,"select * from  code where code='$id_number2'")or die(mysqli_error());
$rowcode=mysqli_fetch_array($querycode);
$no_rider=$rowcode['no_rider'];

$contact=$_POST['contact'];
$querycodecon=mysqli_query($con,"select * from  user where contact='$contact'")or die(mysqli_error());
$rowcodecon=mysqli_num_rows($querycodecon);



    if($rowcodecon<=0){
    
$query21a1c=mysqli_query($con,"select * from  user where id_number='$id_number2' and type='2' || id_number='$id_number2' and type='0'")or die(mysqli_error());
$row21a1ac=mysqli_num_rows($query21a1c);
$row21a1act=mysqli_fetch_array($query21a1c);
if($row21a1ac>=1){
    
$password=$_POST['pin'];
$username=$_POST['contact'];
$address=$_POST['address'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$status="Pending";
$type2="3";
$date=date("Y-m-d H:i");
$idd=$row21a1act['id'];

$queryrider=mysqli_query($con,"select * from  user where sponsor_id='$idd' ")or die(mysqli_error());
$count_rider=mysqli_num_rows($queryrider);


if($no_rider>=$count_rider){

$valid_id=$_POST['valid_id'];
$no_v=$_POST['no_v'];

$pic = $_FILES["valid_id"]["name"];
$temp = explode(".", $_FILES["valid_id"]["name"]);
$newfilename = date("Ymd").round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file"]["tmp_name"], "valid_id/" . $newfilename);

		 
		$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;  


$v_type=$_POST['v_type'];
$v_brand=$_POST['v_brand'];
$v_model=$_POST['v_model'];
$license_no=$_POST['license_no'];
$v_pn=$_POST['v_pn'];
$v_en=$_POST['v_en'];
$v_cn=$_POST['v_cn'];



$v_df = $_FILES["v_df"]["name"];
$temp = explode("df.", $_FILES["v_df"]["name"]);
$newfilename = date("Ymd").round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["v_df"]["tmp_name"], "documents/" . $newfilename);


$v_db = $_FILES["v_db"]["name"];
$temp2 = explode("v_db.", $_FILES["v_db"]["name"]);
$newfilename2 = date("Ymd").round(microtime(true)) . '.' . end($temp2);
move_uploaded_file($_FILES["v_db"]["tmp_name"], "documents/" . $newfilename2);

$v_orcr = $_FILES["v_orcr"]["name"];
$temp22 = explode("v_orcr.", $_FILES["v_orcr"]["name"]);
$newfilename22 = date("Ymd").round(microtime(true)) . '.' . end($temp22);
move_uploaded_file($_FILES["v_orcr"]["tmp_name"], "documents/" . $newfilename22);


$v_nbi = $_FILES["v_nbi"]["name"];
$temp222 = explode("v_nbi.", $_FILES["v_nbi"]["name"]);
$newfilename222 = date("Ymd").round(microtime(true)) . '.' . end($temp222);
move_uploaded_file($_FILES["v_nbi"]["tmp_name"], "documents/" . $newfilename222);


$v_drug = $_FILES["v_drug"]["name"];
$temp2222 = explode("v_drug.", $_FILES["v_drug"]["name"]);
$newfilename2222 = date("Ymd").round(microtime(true)) . '.' . end($temp2222);
move_uploaded_file($_FILES["v_drug"]["tmp_name"], "documents/" . $newfilename2222);






$sql = "INSERT INTO user (v_df,v_db,v_orcr,v_nbi,v_drug,v_cn,v_en,v_pn,license_no,v_model,v_brand,v_type,no_v,valid_id,address,tin,gender,sponsor_id,id_number,firstname,middlename,lastname,status,email,contact,date_added,type,username,password)
VALUES ('$newfilename','$newfilename2','$newfilename22','$newfilename222','$newfilename2222','$v_cn','$v_en','$v_pn','$license_no','$v_model','$v_brand','$v_type','$no_v','$newfilename','$address','-','$gender','$idd','$id_n','$firstname','$middlename','$lastname','$status','$email','$contact','$date','$type2','$username','$password')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

   <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='rider_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert33a();
function JSalert33a(){

swal("Success!", "Successfully Registered!!", "success");
 
}
</script>


<?php
}else{
    
    ?>
    
       <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='rider_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert33as();
function JSalert33as(){

swal("Ops!", "Operator reached the maximum number of rider!", "warning");
 
}
</script>

    
    
    
    
    <?php
}

}else{
    ?>
    
    
     <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='rider_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert33();
function JSalert33(){

swal("Ops!", "Franchise No. is in correct!!", "warning");
 
}
</script>
    
    
    <?php
    
    
    
    
    
}
}else{
?>





     <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='rider_register.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert33aa();
function JSalert33aa(){

swal("Ops!", "Contact Number Already Registered!", "warning");
 
}
</script>



    
    <?php
    
}
    




}

$rand_start = rand(1000,9999);
$id_n=date("Ymd")."".$rand_start;

?>           
                    
                    
                    
                    
                    
                    
                    
                    	      <form  method="post" enctype='multipart/form-data'>  
                    <div class="card-header">
                                 
                      <h4>Booq Rider-Registration<br>
                      </h4>
                    </div>
                    <div class="card-body">
                         <h5>Operator Details</h5>
                         <hr>
                 <div class="form-group">
                        <label>Operator ID Number *</label>
                        <input name="id_number2" value="<?php echo $rowuser['id_number'];?>" type="text" class="form-control" required="">
                      </div>
             
       
          
          
            <h5>Account Password</h5>
                         <hr>

                               <div class="form-group">
                     
                        <input name="pin" value="<?php echo rand(1000,9999);?>" type="text" class="form-control" required="">
                      </div>
          
          
                       <h5>Basic Information</h5>
                         <hr>

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
                        <input name="contact" placeholder="9123456789" type="number" min="9000000000" max="9999999999" class="form-control" required="">
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
                      
                      
                      
                            <h5>Requirements Needed</h5>
                         <hr>
                         
                         
                                
                                         <div class="form-group">
                        <label>License Number *</label>
                        <input name="license_no" type="text" class="form-control" required="">
                      </div>
                         
                         
                                                      <div class="form-group">
                        <label>Plate Number *</label>
                        <input name="v_pn" type="text" class="form-control" required="">
                      </div>
                                                                <div class="form-group">
                        <label>Engine Number *</label>
                        <input name="v_en" type="text" class="form-control" required="">
                      </div>
                                                                <div class="form-group">
                        <label>Chasiss Number *</label>
                        <input name="v_cn" type="text" class="form-control" required="">
                      </div>
                         
                                                     <div class="form-group">
                        <label>Vehicle Type *</label>
                           <select name="v_type" type="text" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>Motorcycle</option>
                             
                            </select>
                      </div>
                      
                                                     <div class="form-group">
                        <label>Vehicle Brand *</label>
                           <select name="v_brand" type="text" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>HONDA</option>
                            <option>YAMAHA</option>
                            <option>KAWASAKI</option>
                            <option>SUZUKI</option>
                            <option>RUSI</option>
                            <option>OTHERS</option>
                             
                            </select>
                      </div>
                      
                                                                    <div class="form-group">
                        <label>Vehicle Model *</label>
                           <select name="v_model" type="text" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>100 CC</option>
                            <option>110 CC</option>
                            <option>125 CC</option>
                            <option>135 CC</option>
                            <option>150 CC</option>
                            <option>155 CC</option>
                              <option>160 CC</option>
                                <option>180 CC</option>
                                  <option>200 CC</option>
                                <option>220 CC</option>
                                   <option>OTHERS</option>
                            </select>
                      </div>
                         
                         
                                                   <div class="form-group">
                        <label>Driver's License (Photo - Front Part) </label>
                        <input name="v_df" type="file" class="form-control" required="">
                      </div>
                                                           <div class="form-group">
                        <label>Driver's License (Photo - Back Part) </label>
                        <input name="v_db" type="file" class="form-control" required="">
                      </div>
                                                                 <div class="form-group">
                        <label>Vehicle's OR/CR (Photo)</label>
                        <input name="v_orcr" type="file" class="form-control" required="">
                      </div>
                      
                      
                      
                                                                      <div class="form-group">
                        <label>NBI Clearance (Photo)</label>
                        <input name="v_nbi" type="file" class="form-control" required="">
                      </div>
                      
                      
                                                                      <div class="form-group">
                        <label>Drug Test (Photo) Optional </label>
                        <input name="v_drug" type="file" class="form-control" >
                      </div>
                      
                      
                    </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Submit</button>
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