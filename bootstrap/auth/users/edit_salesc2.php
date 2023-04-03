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
$query=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);

?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];



$approve_admin=$_POST['approve_admin'];
$approve_agent=$_POST['approve_agent'];
$remarks_admin=$_POST['remarks_admin'];

$query2=mysqli_query($con,"SELECT * FROM user WHERE id='$sid' and approve_agent='Pending' ")or die(mysqli_error($con));
	$row2=mysqli_num_rows($query2);

if($row2>=1){
	mysqli_query($con,"update user set approve_agent='$approve_agent' ,remarks_admin='$remarks_admin'
 where id='$id'")or die(mysqli_error());

		  
		  
		  
		  
		  
		  ?>
		  
		  
		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='sales_channelagent2.php';
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
		  
}else{
    
    ?>
    
    
    
    		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='sales_channelagent2.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSaler2t();
function JSaler2t(){

swal("Ops!", "Sales Agent Already Proved!", "warning");
 
}
</script>
    
    <?php
    
    
}

	
		 


		





}


?>           
                  <form method="POST">
                    <div class="card-header">
                                 
                      <h4>Sales Channel Information</h4>
                    </div>
                    <div class="card-body">
                          
            <div class="row">
        
              

                
                
          
      <div class="col-12 col-md-12 col-lg-12"> 
                
                    <h3>Business Information</h3>
                      <p>BUSINESS DETAILS</p>
                    
                     </div>      
                
                
                
                                     <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Business Name *</label>
                        <input name="email" type="text" value="<?php echo $row['business_name'];?>" class="form-control" required="">
                      </div>
                   </div>
                
                
                  <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Business Type *</label>
                        <input name="email" type="text" value="<?php echo $row['business_type'];?>" class="form-control" required="">
                      </div>
                   </div>
                        
                  <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Nature of Business *</label>
                        <input name="email" type="text" value="<?php echo $row['business_nature'];?>" class="form-control" required="">
                      </div>
                   </div>
                
                
                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>SEC/DTI Reg No. *</label>
                        <input name="email" type="text" value="<?php echo $row['dti'];?>" class="form-control" required="">
                      </div>
                   </div>
                
                 <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>TIN *</label>
                        <input name="email" type="text" value="<?php echo $row['tin'];?>" class="form-control" required="">
                      </div>
                   </div>
                   
                   
                     <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>VAT *</label>
                        <input name="email" type="text" value="<?php echo $row['vat'];?>" class="form-control" required="">
                      </div>
                   </div>
                            <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Date Established *</label>
                        <input name="email" type="date" value="<?php echo $row['date_stablished'];?>" class="form-control" required="">
                      </div>
                   </div>
                   
                   
                   
                        
      <div class="col-12 col-md-12 col-lg-12"> 
                
              
                      <p>BUSINESS ADDRESS</p>
                    
                     </div> 
                   
                   
                            <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Region *</label>
                        <input name="email" type="text" value="<?php echo $row['business_region'];?>" class="form-control" required="">
                      </div>
                   </div>
                                    <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Province *</label>
                        <input name="email" type="text" value="<?php echo $row['business_province'];?>" class="form-control" required="">
                      </div>
                   </div>
                                              <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="email" type="text" value="<?php echo $row['business_city'];?>" class="form-control" required="">
                      </div>
                   </div>
                     <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Barangay *</label>
                        <input name="email" type="text" value="<?php echo $row['business_barangay'];?>" class="form-control" required="">
                      </div>
                   </div>
                   
                                <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Block No., Street, Village etc. *</label>
                        <input name="email" type="text" value="<?php echo $row['business_barangay'];?>" class="form-control" required="">
                      </div>
                   </div>
                    <div class="col-12 col-md-12 col-lg-12"> 
                
              
                      <p>BUSINESS CONTACT</p>
                    
                     </div> 
                               <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="text" value="<?php echo $row['business_email'];?>" class="form-control" required="">
                      </div>
                   </div>
                   
                               <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Contact Number *</label>
                        <input name="email" type="text" value="<?php echo $row['business_contact'];?>" class="form-control" required="">
                      </div>
                   </div>
                   
                   
                               <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Telephone Number </label>
                        <input name="email" type="text" value="<?php echo $row['business_tel'];?>" class="form-control" >
                      </div>
                   </div>
                   
                   
                   
                               <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Fax Number </label>
                        <input name="email" type="text" value="<?php echo $row['business_fax'];?>" class="form-control" >
                      </div>
                   </div>
                   
                          <div class="col-12 col-md-12 col-lg-12"> 
                
              <br><br>
                <hr>
                    
                     </div>
             
                
                


                      
     
      
                      
                      
                                <div class="col-12 col-md-12 col-lg-12"> 
                 <h3>Seller Information</h3>
                    <p>PERSONAL DETAILS</p>
                    
                    
                     </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                      
                               <div class="form-group">
                        <label>Firstname *</label>
                        <input name="firstname" value="<?php echo $row['firstname'];?>"type="text" class="form-control" required="">
                      </div>
                </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                  <div class="form-group">
                        <label>Middlename *</label>
                        <input name="middlename" value="<?php echo $row['middlename'];?>"type="text" class="form-control" required="">
                      </div>
                       </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Lastname *</label>
                        <input name="lastname" value="<?php echo $row['lastname'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                      
                                                     <div class="form-group">
                        <label>Suffix Name i.e. Jr, Sr, III (Optional)</label>
                        <input value="<?php echo $row['suffix'];?>"name="suffix" type="text" class="form-control" >
                      </div>
                       </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                <div class="form-group">
                        <label>Birthday *</label>
                        <input name="bday" value="<?php echo $row['birthday'];?>"type="date" class="form-control" required="">
                      </div>
                      
                       </div>
                      
                      
                                <div class="col-12 col-md-12 col-lg-12"> 
                        <p>HOME ADDRESS</p>
                         </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                        
                                                    <div class="form-group">
                        <label>Region *</label>
                        <input name="region" value="<?php echo $row['region'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                      
                                                    <div class="form-group">
                        <label>Province *</label>
                        <input name="province" value="<?php echo $row['province'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                         <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="city" value="<?php echo $row['city'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                                 <div class="form-group">
                        <label>Barangay *</label>
                        <input name="barangay" value="<?php echo $row['barangay'];?>" type="text" class="form-control" required="">
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                               <div class="form-group">
                        <label>Block No., Street, Village etc. *</label>
                        <input name="address" value="<?php echo $row['address'];?>" type="text" class="form-control" required="">
                      </div>
                                 </div>
                      
            




                             
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Civil Status</label>
                        <select name="statuss" type="text" class="form-control" required="">
                            <option><?php echo $row['civil_status'];?></option>
                            <option>Single</option>
                              <option>Married</option>
                            </select>
                      </div>
                               </div>


                
                      <div class="col-12 col-md-12 col-lg-12"> 
                
              
            
                      <p>CONTACT DETAILS</p>
                    
                     </div> 
        
                    
             


                          <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Email *</label>
                        <input name="email" type="email" value="<?php echo $row['email'];?>" class="form-control" required="">
                      </div>
                   </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                      
                                         <div class="form-group">
                        <label>Contact Number *</label>
                        <input name="contact" value="<?php echo $row['contact'];?>" type="text" class="form-control" required="">
                      </div>
                       </div>
                      












                
                      <div class="col-12 col-md-12 col-lg-12"> 
                
              
                              
                    
                    
                    
                    
                    
                    
                    
                    

                     </div> 
        
                    
             
 <div class="col-12 col-md-12 col-lg-12"> 



                  <div class="card-header">
                 <h5>File Attachments</h5>
                 
         
                  </div> 
                  

                              
      
                      
                    <div class="table-responsive">
                      <table class="table table-striped table-hover"  style="width:100%;">
                        <thead>
                          <tr>
                        
                        <th>Filename</th>
                         <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                           		



                            
                          <tr>
   
                              <td>Customer Information Sheet</td>
                              
                              <?php
                              if($row['business_info']!=""){
                              ?>
                             <td><a href="uploads/<?php echo $row['business_info']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                             
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                          </tr>
                             <tr>
   
                              <td>Signature Card</td>
                              
                              
                                <?php
                              if($row['business_sign']!=""){
                              ?>
                       <td><a href="uploads/<?php echo $row['business_sign']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                           
                                   
                          </tr>
                          
                                     <tr>
   
                              <td>Memorandum of Agreement</td>
                              
                              
                              
                              
                              
                              
                                   <?php
                              if($row['business_ma']!=""){
                              ?>
                                             
                             <td><a href="uploads/<?php echo $row['business_ma']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
      
                                   
                          </tr>
                          
                            <tr>
   
                              <td>Mayor's Permit</td>
                              
                              
                                             
                              
                                   <?php
                              if($row['business_mp']!=""){
                              ?>
                                             
                                     
                             <td><a href="uploads/<?php echo $row['business_mp']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
                              
          
                                   
                          </tr>
                                     <tr>
   
   
   
   
   
   
   
   
   
   
   
                              <td>FPA permit</td>
                              
                                                    
                                   <?php
                              if($row['business_fpa']!=""){
                              ?>
                                             
                                     
                        
                              
                             <td><a href="uploads/<?php echo $row['business_fpa']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                  
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                            
                                   
                          </tr>


                 <tr>
   
                              <td>BIR 2303</td>
                              
                              
                                                   <?php
                              if($row['business_bir']!=""){
                              ?>
                                             
                                     
                        
                                                
                              
                             <td><a href="uploads/<?php echo $row['business_bir']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                   
                                  
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
                              
                              
        
                          </tr>
                          
                                  <tr>
   
                              <td>ID 1</td>
                              
                              
                              
                              
                              
                                 <?php
                              if($row['business_id1']!=""){
                              ?>
                                             
                                     
                        
                                       
                             <td><a href="uploads/<?php echo $row['business_id1']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                   
                                   
                                  
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
                              
                              
                              
                              
                              
                  
                          </tr>
                                 <tr>
   
                              <td>ID 2</td>
                              
                              
                              
                                                     <?php
                              if($row['business_id2']!=""){
                              ?>
                                             
                                     
                        
                            
                             <td><a href="uploads/<?php echo $row['business_id2']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                   
                                   
                                  
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
                              
                              
                              
                            
                          </tr>
                          
                                     <tr>
   
                              <td>DTI Permit</td>
                              
                              
                              
                              
                                                  
                                                     <?php
                              if($row['business_dti']!=""){
                              ?>
                                             
                                     
                        
                            
                           <td><a href="uploads/<?php echo $row['business_dti']?>"><i class="fas fa-download"></i> View Attachment</a></td>
                                   
                                   
                                   
                                  
                                <?php
                              }else{
                              ?>
                                      <td><i class="fas fa-times"></i> No Attachement</td>
                             
                             <?php
                              }
                             ?>
                              
                              
                              
                              
                              
                              
                              
                              
                            
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
            


                                             <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Remarks</label>
             <textarea class="form-control" name="remarks"><?php echo $row['remarks'];?></textarea>
                      </div>
                               </div>




<?php
if($row['approve_agent']!="Approved"){
?>

                              <div class="col-12 col-md-12 col-lg-12"> 
                              <br><br><hr>
                 <h3>Approval Status</h3>
        
                    
                    
                     </div>
           
                                   
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label> Approval Status</label>
                        <select name="approve_agent" type="text" class="form-control" required="">
                            <option><?php echo $row['approve_agent'];?></option>
                            <option>Approved</option>
                              <option>Pending</option>
                              <option>Reject</option>
                            </select>
                      </div>
                               </div>
                               
                               
                               
                               
                                         
                               
                               
                               
                                                                                        
                                             <div class="col-12 col-md-4 col-lg-8"> 
                                         <div class="form-group">
                        <label>Remarks</label>
             <textarea class="form-control" name="remarks_admin"><?php echo $row['remarks_admin'];?></textarea>
                      </div>
                               </div>
                               
                            <?php
}else{
?>   
                               
                               
            
                              <div class="col-12 col-md-12 col-lg-12"> 
                              <br><br><hr>
                 <h3>Approval Status</h3>
        
                    
                    
                     </div>
           
                                   
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label> Approval Status</label>
                        <input name="approve_agent" type="text" class="form-control" readonly="" value="<?php echo $row['approve_agent'];?>">
                           
                      </div>
                               </div>
                               
                               
                               
                               
                                         
                               
                               
                               
                                                                                        
                                             <div class="col-12 col-md-4 col-lg-8"> 
                                         <div class="form-group">
                        <label>Remarks</label>
             <textarea class="form-control" name="remarks_admin" readonly><?php echo $row['remarks_admin'];?></textarea>
                      </div>
                               </div>                   
                               
               <?php
}
?>                
                               
                               
                               
                               
               
                    </div>
                               </div>
                    <div class="card-footer text-right">
                      <button name="signin" class="btn btn-primary">Update Sales Channel</button>
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