<?php

include('header.php');

?>
      <!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>What you need to know? All Document(s)</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                  
                          
                          
                          
                                <table class="table table-striped table-hover" id="table-1" style="width:100%;">
                        <thead>
                          <tr>
                         
              <th>Filename</th>
                              
              <th>Date</th>
                         
                          </tr>
                        </thead>
                        <tbody>
                            
                           				<?php

$uid=$_SESSION['id'];

$query=mysqli_query($con,"select * from  faqs  order by file asc")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  


$count++;
				  ?> 
                            
                        
                            
                          <tr>
                            <td><a href="file/<?php echo $row['file']?>"><i class="fas fa-download"></i> <?php echo $row['file']?></a></td>
                            
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
    
      </div>
     <?php
     
     include('footer.php');
     
     ?>