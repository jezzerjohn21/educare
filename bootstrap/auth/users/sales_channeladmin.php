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
                    <h4>Distributor Account (Admin Approval)</h4>
        
                  </div> 
                  

                              
                              
                  <div class="card-body">
            
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                         <th>#</th>
              <th>Account Type</th>
                        <th>Name</th>
                         <th>Email</th>
                         <th>Contact Number</th>
                        <th>Password</th>
                          
                        
                            <th>Birthday</th>
                                <th>Region</th>
                                    <th>Province</th>
                                        <th>City/Municipality</th>
                                            <th>Barangay</th>
                                                <th>Block No., Street, Village</th>
                                                      
                                                <th>Status</th>
                               <th>Date Registered</th>
                                 <th>Agent Approval</th>
                                 <th>Admin Approval</th>
                                 <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php



$query=mysqli_query($con,"select * from  user where type='2' and approve_admin='Pending' and approve_agent='Approved' and account_type='Distributor' order by lastname asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  




$reg=$row['region'];
$queryregion=mysqli_query($con,"select * from  refregion where regCode='$reg' ")or die(mysqli_error());
$rowregion=mysqli_fetch_array($queryregion); 

$reg2=$row['province'];
$queryregion2=mysqli_query($con,"select * from  refprovince where provCode='$reg2' ")or die(mysqli_error());
$rowregion2=mysqli_fetch_array($queryregion2); 


$reg3=$row['city'];
$queryregion3=mysqli_query($con,"select * from  refcitymun where citymunCode='$reg3' ")or die(mysqli_error());
$rowregion3=mysqli_fetch_array($queryregion3); 



$reg4=$row['barangay'];
$queryregion4=mysqli_query($con,"select * from  refbrgy where brgyCode='$reg4' ")or die(mysqli_error());
$rowregion4=mysqli_fetch_array($queryregion4); 
$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><?php echo $count?></td>
                            
                                <td><?php echo $row['account_type']?></td>
                                  
                                      <td><?php echo strtoupper($row['lastname'])?>, <?php echo strtoupper($row['firstname'])?> <?php echo strtoupper($row['middlename'])?> <?php echo strtoupper($row['suffix'])?></td>
                                      
                                      
                                                   
                                                    
                                                    
                                                                
                                                                  
                                                                                <td><?php echo $row['email']?></td>
                                                                                              <td><?php echo $row['contact']?></td>
                                                                                                <td><?php echo $row['password']?></td>
                                                                  
                                                        <td><?php echo $row['birthday']?></td>                                <td><?php echo $rowregion['regDesc']?></td>                                <td><?php echo $rowregion2['provDesc']?></td>            <td><?php echo $rowregion3['citymunDesc']?></td>                               <td><?php echo $rowregion4['brgyDesc']?></td>                            <td><?php echo $row['address']?></td>                                                                                                                                                   <td>
                                                                                                                                            
                                              <?php
                                   if($row['status']=="Active"){?>
                                   
                                   <div class="badge badge-success badge-shadow"><?php echo $row['status'];?>
                                   
                                   </div> 
                                  
                                   <?php
                                   }
                                   
                                   ?>
                                                   
                                       <?php
                                   if($row['status']=="In-active"){?><div class="badge badge-danger badge-shadow"><?php echo $row['status'];?></div> 
                                  
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                                                      <?php
                                   if($row['status']=="Blocked"){?><div class="badge badge-info badge-shadow"><?php echo $row['status'];?></div> 
                               
                                   
                                   <?php
                                   }
                                   
                                   ?>                                                                 
                                                                                                                                            
                                                                                                                                            </td>                                                                                                       
                                                                                                                          <td><?php echo $row['date_added']?></td>
                                                                                
                                                                                            <td><?php echo $row['approve_agent']?></td>                                                                     <td><?php echo $row['approve_admin']?></td>                                                                     
                                                                                                                            	   <td>
                                 	       
                                                        
                                                                                                                            	       <a href="edit_salesc.php?id=<?php echo $row['id'];?>" class="btn btn-success"><font color="white">Update</font></a></td>
                                                                                                                            	   
                                                                                                     
                                                                  
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
                <h5 class="modal-title" id="exampleModalLabel">Sales Channel Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              
              	<?php

if(isset($_POST['signin']))
{
$id_number=$_POST['id_number'];
$password=$_POST['password'];
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$suffix=$_POST['suffix'];
$status="Active";

$date=date("Y-m-d H:i");

$bday=$_POST['bday'];
$region=$_POST['region'];
$province=$_POST['province'];
$city=$_POST['city'];
$barangay=$_POST['barangay'];

$address=$_POST['address'];
$sponsor_id=$_POST['sponsor_id'];

	$query21a1=mysqli_query($con,"select * from  user where email='$email' ")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);
if($row21a1a<=0){



$civil_status=$_POST['civil_status'];
$business_name=$_POST['business_name'];
$business_type=$_POST['business_type'];
$business_nature=$_POST['business_nature'];
$dti=$_POST['dti'];
$tin=$_POST['tin'];
$vat=$_POST['vat'];
$date_stablished=$_POST['date_stablished'];
$business_region=$_POST['business_region'];
$business_province=$_POST['business_province'];
$business_city=$_POST['business_city'];
$business_barangay=$_POST['business_barangay'];
$business_address=$_POST['business_address'];
$business_email=$_POST['business_email'];
$business_contact=$_POST['business_contact'];
$business_tel=$_POST['business_tel'];
$business_fax=$_POST['business_fax'];




$temp = explode(".", $_FILES["business_info"]["name"]);
$business_info ="CustomerInformationSheet".round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["business_info"]["tmp_name"], "uploads/" . $business_info);







$temp2 = explode(".", $_FILES["business_sign"]["name"]);
$business_sign ="SignatureCard".round(microtime(true)) . '.' . end($temp2);
move_uploaded_file($_FILES["business_sign"]["tmp_name"], "uploads/" . $business_sign);













$temp23 = explode(".", $_FILES["business_ma"]["name"]);
$business_ma ="MemorandumofAgreement".round(microtime(true)) . '.' . end($temp23);
move_uploaded_file($_FILES["business_ma"]["tmp_name"], "uploads/" . $business_ma);



$temp4 = explode(".", $_FILES["business_mp"]["name"]);
$business_mp ="MayorsPermit".round(microtime(true)) . '.' . end($temp4);
move_uploaded_file($_FILES["business_mp"]["tmp_name"], "uploads/" . $business_mp);









$temp5 = explode(".", $_FILES["business_fpa"]["name"]);
$business_fpa ="FPApermit".round(microtime(true)) . '.' . end($temp5);
move_uploaded_file($_FILES["business_fpa"]["tmp_name"], "uploads/" . $business_fpa);










$temp56 = explode(".", $_FILES["business_bir"]["name"]);
$business_bir ="BIR2303".round(microtime(true)) . '.' . end($temp56);
move_uploaded_file($_FILES["business_bir"]["tmp_name"], "uploads/" . $business_bir);







$temp567 = explode(".", $_FILES["business_id1"]["name"]);
$business_id1 ="ID1".round(microtime(true)) . '.' . end($temp567);
move_uploaded_file($_FILES["business_id1"]["tmp_name"], "uploads/" . $business_id1);



$temp5678 = explode(".", $_FILES["business_id2"]["name"]);
$business_id2 ="ID2".round(microtime(true)) . '.' . end($temp5678);
move_uploaded_file($_FILES["business_id2"]["tmp_name"], "uploads/" . $business_id2);



$temp56789 = explode(".", $_FILES["business_dti"]["name"]);
$business_dti ="DTI".round(microtime(true)) . '.' . end($temp56789);
move_uploaded_file($_FILES["business_dti"]["tmp_name"], "uploads/" . $business_dti);




$remarks=$_POST['remarks'];


		  mysqli_query($con,"INSERT INTO user(gender,id_number,firstname,middlename,lastname,suffix,status,email,contact,date_added,password,birthday,region,province,city,barangay,address,sponsor_id,type,civil_status,business_name,business_type,business_nature,dti,tin,vat,date_stablished,business_region,business_province,business_city,business_barangay,business_address,business_email,business_contact,business_tel,business_fax,business_info,business_sign,business_ma,business_mp,business_fpa,business_bir,business_id1,business_id2,business_dti,remarks,approve_agent,approve_admin) VALUES('Male','$id_number','$firstname','$middlename','$lastname','$suffix','$status','$email','$contact','$date','$password','$bday','$region','$province','$city','$barangay','$address','$sponsor_id','2','$civil_status'
		  ,'$business_name'
		  ,'$business_type'
		  ,'$business_nature'
		  ,'$dti','$tin','$vat','$date_stablished','$business_region','$business_province','$business_city','$business_barangay','$business_address','$business_email','$business_contact','$business_tel','$business_fax','$business_info','$business_sign','$business_ma','$business_mp','$business_fpa','$business_bir','$business_id1','$business_id2','$business_dti','$remarks','Pending','Pending')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='sales_channel.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Register!", "success");
 
}
</script>



<?php
}else{
    ?>
    
    
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='sales_channel.php';
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



}


function generateRandomString($length = 3) {
    return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

 // OR: generateRandomString(24)
$rand_start = rand(100,999)."".generateRandomString();
$id_n=$rand_start;

?>           
                    
                  
              
                <form method="POST"  enctype='multipart/form-data'>  
              <div class="modal-body">
                  
                  
                  

      
             
                        <input name="id_number" value="<?php echo $id_n;?>" type="hidden" class="form-control" readonly="">
                           <h3>Account Information </h3>
                    <p>Please fill up the form below. </p>
                    
                    
                           
                  
                      
           
                    <p>BUSINESS INFORMATION</p>
                      
                               <div class="form-group">
                        <label>Business Name *</label>
                        <input name="business_name" type="text" class="form-control" required="">
                      </div>
                                <div class="form-group">
                        <label>Business Type *</label>
                        <input name="business_type" type="text" class="form-control" required="">
                      </div>
                                <div class="form-group">
                        <label>Nature of Business *</label>
                        <input name="business_nature" type="text" class="form-control" required="">
                      </div>
                                <div class="form-group">
                        <label>SEC/DTI Reg No. *</label>
                        <input name="dti" type="text" class="form-control" required="">
                      </div>
                                      <div class="form-group">
                        <label>TIN *</label>
                        <input name="tin" type="text" class="form-control" required="">
                      </div>
                                      <div class="form-group">
                        <label>VAT No. *</label>
                        <input name="vat" type="text" class="form-control" required="">
                      </div>
                                              <div class="form-group">
                        <label>Date Established *</label>
                        <input name="date_stablished" type="date" class="form-control" required="">
                      </div>
               
               
                <p>BUSINESS ADDRESS</p>
               
                                <div class="form-group">
                        <label>Region *</label>
                        <input name="business_region" type="text" class="form-control" required="">
                      </div>
               
                                <div class="form-group">
                        <label>Province *</label>
                        <input name="business_province" type="text" class="form-control" required="">
                      </div>
               
                                <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="business_city" type="text" class="form-control" required="">
                      </div>
               
                                <div class="form-group">
                        <label>Barangay *</label>
                        <input name="business_barangay" type="text" class="form-control" required="">
                      </div>
               
                                     <div class="form-group">
                        <label>Block No., Street, Village etc. *</label>
                        <input name="business_address" type="text" class="form-control" required="">
                      </div>
                      
                       <p>CONTACT DETAILS</p>
                                            <div class="form-group">
                        <label>Email *</label>
                        <input name="business_email" type="text" class="form-control" required="">
                      </div>
                                              <div class="form-group">
                        <label>Contact Number *</label>
                        <input name="business_contact" type="text" class="form-control" required="">
                      </div>
                                              <div class="form-group">
                        <label>Telephone Number (Optional)</label>
                        <input name="business_tel" type="text" class="form-control" >
                      </div>
                                              <div class="form-group">
                  <label>Fax Number (Optional)</label>
                        <input name="business_fax" type="text" class="form-control" required="">
                      </div>
                      <hr>
            <h3>Seller Information </h3>
                     <p>Please fill up the form below. </p>
                    <p>PERSONAL DETAILS</p>
    
                      
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
                        <label>Suffix Name i.e. Jr, Sr, III (Optional)</label>
                        <input name="suffix" type="text" class="form-control" >
                      </div>
                      
                                                <div class="form-group">
                        <label>Birthday *</label>
                        <input name="bday" type="date" class="form-control" required="">
                      </div>
                      
                      
                      
                                                <div class="form-group">
                        <label>Civil Status *</label>
                        <select name="civil_status" type="date" class="form-control" required="">
                            <option value="">--Please Select--</option>
                            <option>Single</option>
                            <option>Married</option>
                            </select>
                      </div>
                      
                      
                        <p>SELLER ADDRESS</p>
                
                        
                                                    <div class="form-group">
                        <label>Region *</label>
                        <input name="region" type="text" class="form-control" required="">
                      </div>
                                      
                                                    <div class="form-group">
                        <label>Province *</label>
                        <input name="province" type="text" class="form-control" required="">
                      </div>
                                                         <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="city" type="text" class="form-control" required="">
                      </div>
                                                                 <div class="form-group">
                        <label>Barangay *</label>
                        <input name="barangay" type="text" class="form-control" required="">
                      </div>
                                                               <div class="form-group">
                        <label>Block No., Street, Village etc. *</label>
                        <input name="address" type="text" class="form-control" required="">
                      </div>
                                      
      
                                 <p>CONTACT DETAILS</p>
           
                 <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" class="form-control" required="">
                      </div>
                      
                                         <div class="form-group">
                        <label>Contact Number *</label>
                        <input name="contact" type="text" class="form-control" required="">
                      </div>
                      
                                                
              
                         
                <div class="form-group">
                        <label>Password *</label>
                        <input name="password" type="password" class="form-control" required="">
                      </div>
             
      <h3>File Attachments </h3>
                     <p>Please fill up the following documents. </p>


            
                <div class="form-group">
                        <label>Customer Information Sheet *</label>
                        <input name="business_info" type="file" class="form-control" required="">
                      </div>
                <div class="form-group">
                        <label>Signature Card *</label>
                        <input name="business_sign" type="file" class="form-control" required="">
                      </div>
      
            <div class="form-group">
                        <label>Memorandum of Agreement *</label>
                        <input name="business_ma" type="file" class="form-control" required="">
                      </div>
      
                  <div class="form-group">
                        <label>Mayor's Permit *</label>
                        <input name="business_mp" type="file" class="form-control" required="">
                      </div>
            <div class="form-group">
                        <label>FPA Permit *</label>
                        <input name="business_fpa" type="file" class="form-control" required="">
                      </div>
                          <div class="form-group">
                        <label>BIR 2303 *</label>
                        <input name="business_bir" type="file" class="form-control" required="">
                      </div>
              <div class="form-group">
                        <label>First ID *</label>
                        <input name="business_id1" type="file" class="form-control" required="">
                      </div>
                            <div class="form-group">
                        <label>Second ID *</label>
                        <input name="business_id2" type="file" class="form-control" required="">
                      </div>
                      
                                 <div class="form-group">
                        <label>DTI Permit *</label>
                        <input name="business_dti" type="file" class="form-control" required="">
                      </div>
                                    <div class="form-group">
                        <label>Remarks *</label>
                        <textarea name="remarks" type="file" class="form-control" required=""></textarea>
                      </div>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button name="signin" type="submit" class="btn btn-primary">Create Account</button>
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