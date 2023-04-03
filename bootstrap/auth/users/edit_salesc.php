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








$areg=$row['business_region'];
$aqueryregion=mysqli_query($con,"select * from  refregion where regCode='$areg' ")or die(mysqli_error());
$arowregion=mysqli_fetch_array($aqueryregion); 

$areg2=$row['business_province'];
$aqueryregion2=mysqli_query($con,"select * from  refprovince where provCode='$areg2' ")or die(mysqli_error());
$arowregion2=mysqli_fetch_array($aqueryregion2); 


$areg3=$row['business_city'];
$aqueryregion3=mysqli_query($con,"select * from  refcitymun where citymunCode='$areg3' ")or die(mysqli_error());
$arowregion3=mysqli_fetch_array($aqueryregion3); 



$areg4=$row['business_barangay'];
$aqueryregion4=mysqli_query($con,"select * from  refbrgy where brgyCode='$areg4' ")or die(mysqli_error());
$arowregion4=mysqli_fetch_array($aqueryregion4); 











?>
                    
                    
             <?php

if(isset($_POST['signin']))
{
$id=$_GET['id'];



$approve_admin=$_POST['approve_admin'];
$approve_agent=$_POST['approve_agent'];
$remarks_admin=$_POST['remarks_admin'];



	mysqli_query($con,"update user set remarks_admin='$remarks_admin',approve_admin='$approve_admin',approve_agent='Approved'
 where id='$id'")or die(mysqli_error());

		  
		  
		  
		  
		  
		  ?>
		  
		  
		  	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='edit_salesc.php?id='<?php echo $_GET['id'];?>;
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
                        <input name="email" type="text" value="<?php echo $arowregion['regDesc'];?>" class="form-control" readonly="">
                      </div>
                   </div>
                                    <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Province *</label>
                        <input name="email" type="text" value="<?php echo $arowregion2['provDesc'];?>" class="form-control" readonly="">
                      </div>
                   </div>
                                              <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="email" type="text" value="<?php echo $arowregion3['citymunDesc'];?>" class="form-control" readonly="">
                      </div>
                   </div>
                     <div class="col-12 col-md-4 col-lg-4"> 
                <div class="form-group">
                        <label>Barangay *</label>
                        <input name="email" type="text" value="<?php echo $arowregion4['brgyDesc'];?>" class="form-control" readonly="">
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
                        <input name="region" value="<?php echo $rowregion['regDesc'];?>" type="text" class="form-control" readonly>
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                      
                                                    <div class="form-group">
                        <label>Province *</label>
                        <input name="province" value="<?php echo $rowregion2['provDesc'];?>" type="text" class="form-control" readonly>
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                         <div class="form-group">
                        <label>City/Municipality *</label>
                        <input name="city" value="<?php echo $rowregion3['citymunDesc'];?>" type="text" class="form-control" readonly>
                      </div> </div>
                      
                      
                            <div class="col-12 col-md-4 col-lg-4"> 
                                                                 <div class="form-group">
                        <label>Barangay *</label>
                        <input name="barangay" value="<?php echo $rowregion4['brgyDesc'];?>" type="text" class="form-control" readonly>
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
                        <select name="civil_status" type="text" class="form-control" required="">
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



        
                    




                              <div class="col-12 col-md-12 col-lg-12"> 
                              <br><br><hr>
                 <h3>Approval Status</h3>
        
                    
                    
                     </div>
           
                                   

       
<?php
if($row['approve_admin']=="Approved"){
?>

                           
                              <div class="col-12 col-md-12 col-lg-12"> 
                              <br><br><hr>
                 <h3>Approval Status</h3>
        
                    
                    
                     </div>
           
                                   
                         <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label> Approval Status</label>
                        <input name="approve_admin" type="text" class="form-control" readonly="" value="<?php echo $row['approve_admin'];?>">
                           
                      </div>
                               </div>
                               
                               
                               
                               
                                         
                               
                               
                               
                                                                                        
                                             <div class="col-12 col-md-4 col-lg-8"> 
                                         <div class="form-group">
                        <label>Remarks</label>
             <textarea class="form-control" name="remarks_admin" readonly><?php echo $row['remarks_admin'];?></textarea>
                      </div>
                               </div>       
                               
                            <?php
}else{
?>   
                               
                               
            
                           
                                             <div class="col-12 col-md-4 col-lg-4"> 
                                         <div class="form-group">
                        <label>Admin Approval Status</label>
                        <select name="approve_admin" type="text" class="form-control" required="">
                            <option><?php echo $row['approve_admin'];?></option>
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