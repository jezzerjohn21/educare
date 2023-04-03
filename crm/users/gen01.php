<?php

include('header.php');

?>
     
           <style>


.tree,
.tree ul,
.tree li {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
}

.tree {
    margin: 0 0 1em;
    text-align: center;
}

.tree,
.tree ul {
    display: table;
}

.tree ul {
    width: 100%;
}

.tree li {
    display: table-cell;
    padding: .5em 0;
    vertical-align: top;
}

.tree li:before {
    outline: solid 1px #666;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}

.tree li:first-child:before {
    left: 50%;
}

.tree li:last-child:before {
    right: 50%;
}

.tree code,
.tree span {
    width: 120px;
 
    border: solid .1em #666;
    border-radius: .8em;
    display: inline-block;
    margin: 0 .2em .5em;
    padding: .2em .5em;
    position: relative;
}

.tree ul:before,
.tree code:before,
.tree span:before {
    outline: solid 1px #666;
    content: "";
    height: .5em;
    left: 50%;
    position: absolute;
}

.tree ul:before {
    top: -.5em;
}

.tree code:before,
.tree span:before {
    top: -.55em;
}

.tree>li {
    margin-top: 0;
}

.tree>li:before,
.tree>li:after,
.tree>li>code:before,
.tree>li>span:before {
    outline: none;
}

</style>
    
    
    
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row">
        
              
              <div class="col-12 col-md-12 col-lg-12">
                <div class="table-responsive">
                    



<ul class="tree">
    
    	<?php


   $user_id22=$_GET['id'];
   
   
   
   $querygu=mysqli_query($con,"select * from user where id='$user_id22' ")or die(mysqli_error($con));
 $groupu=mysqli_fetch_array($querygu);
   $user_id22a=$groupu['id'];
   
   
					
$queryg=mysqli_query($con,"select * from groupings where operator_id='$user_id22a' and status!='Completed'  order by id desc")or die(mysqli_error($con));
 $group=mysqli_fetch_array($queryg);
$group_name=$group['group_name'];;
					

	 
      $counter_q=mysqli_query($con,"select * from groupings where  group_name='$group_name' and operator_id!='0' ")or die(mysqli_error($con));
 $counter=mysqli_num_rows($counter_q);	
 
 

               $query=mysqli_query($con,"select DISTINCT group_name,operator_id from groupings where group_name='$group_name' and pos='1'")or die(mysqli_error($con));
 while($row=mysqli_fetch_array($query)){
     
$op1=$row['operator_id'];



$queryop1=mysqli_query($con,"select * from user where id='$op1' ")or die(mysqli_error($con));
 $rowop1=mysqli_fetch_array($queryop1);

    ?>
    
  <li> <span><center><font size="3px"><b><?php echo $rowop1['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop1['firstname'];?> <?php echo $rowop1['lastname'];?></center></span>




<ul>
    
    
   <?php
$query2=mysqli_query($con,"select * from groupings where connect_to='$op1' and pos=2 and group_name='$group_name'")or die(mysqli_error($con));
$row2=mysqli_fetch_array($query2);
     $op2=$row2['operator_id'];
     
     $queryop2=mysqli_query($con,"select * from user where id='$op2' ")or die(mysqli_error($con));
 $rowop2=mysqli_fetch_array($queryop2);

?> 
    
    
  <li> <span><center><font size="3px"><b><?php echo $rowop2['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop2['firstname'];?> <?php echo $rowop2['lastname'];?></center>
  
  <?php
  if($rowop2['id_number']==""){
  ?>
    <a href="operator_reg.php?id=<?php echo $op1;?>&pos=2&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
      <?php
}
  ?>
    
  </span>
  






<ul>
    
    
      <?php
$query3=mysqli_query($con,"select * from groupings where connect_to='$op2' and pos=4 and group_name='$group_name' ")or die(mysqli_error($con));
$row3=mysqli_fetch_array($query3);
     $op3=$row3['operator_id'];
     
     $queryop3=mysqli_query($con,"select * from user where id='$op3' ")or die(mysqli_error($con));
 $rowop3=mysqli_fetch_array($queryop3);
 
 

 
 

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop3['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop3['firstname'];?> <?php echo $rowop3['lastname'];?></center>
  
  <?php
  if($rowop3['id_number']==""){
  ?>
      <?php
  if($op2!="" && $op2!="0" && $counter>=3){
  ?>
    <a href="operator_reg.php?id=<?php echo $op2;?>&pos=4&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
        <?php
}
  ?>
      <?php
}
  ?>
    
  </span>
  
   


<ul>
    
    
    
    
    
    
  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=8 and group_name='$group_name' ")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>






 <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=9 and group_name='$group_name' ")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=9&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
 
      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>
</ul> 
</li>








      <?php
$query3=mysqli_query($con,"select * from groupings where connect_to='$op2' and pos=5 and group_name='$group_name' ")or die(mysqli_error($con));
$row3=mysqli_fetch_array($query3);
     $op3=$row3['operator_id'];
     
     $queryop3=mysqli_query($con,"select * from user where id='$op3' ")or die(mysqli_error($con));
 $rowop3=mysqli_fetch_array($queryop3);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop3['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop3['firstname'];?> <?php echo $rowop3['lastname'];?></center>
  
  <?php
  if($rowop3['id_number']==""){
  ?>
        <?php
  if($op2!="" && $op2!="0" && $counter>=3){
  ?>
    <a href="operator_reg.php?id=<?php echo $op2;?>&pos=5&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
      <?php
  }
}
  ?>
    
  </span>
  
   


<ul>
  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=10 and group_name='$group_name' ")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=10&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    

      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>

  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=11 and group_name='$group_name' ")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=11&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    

      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>

</ul> 
</li>





</ul> 




</li>















    
   <?php
$query2=mysqli_query($con,"select * from groupings where connect_to='$op1' and pos=3 and group_name='$group_name' ")or die(mysqli_error($con));
$row2=mysqli_fetch_array($query2);
     $op2=$row2['operator_id'];
     
     $queryop2=mysqli_query($con,"select * from user where id='$op2' ")or die(mysqli_error($con));
 $rowop2=mysqli_fetch_array($queryop2);

?> 
    
    
  <li> <span><center><font size="3px"><b><?php echo $rowop2['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop2['firstname'];?> <?php echo $rowop2['lastname'];?></center>
    <?php
  if($rowop2['id_number']==""){
  ?>
    <a href="operator_reg.php?id=<?php echo $op1;?>&pos=3&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
      <?php
}
  ?>
    
  
  </span>





<ul>
    
    
      <?php
$query3=mysqli_query($con,"select * from groupings where connect_to='$op2' and pos=6 and group_name='$group_name' ")or die(mysqli_error($con));
$row3=mysqli_fetch_array($query3);
     $op3=$row3['operator_id'];
     
     $queryop3=mysqli_query($con,"select * from user where id='$op3' ")or die(mysqli_error($con));
 $rowop3=mysqli_fetch_array($queryop3);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop3['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop3['firstname'];?> <?php echo $rowop3['lastname'];?></center>
  
  <?php
  if($rowop3['id_number']==""){
  ?>
        <?php
  if($op2!="" && $op2!="0" && $counter>=3){
  ?>
    <a href="operator_reg.php?id=<?php echo $op2;?>&pos=6&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
      <?php
  }
}
  ?>
    
  </span>
  
   

<ul>
  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=12 and group_name='$group_name' ")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=12&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    

      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>

  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=13 and group_name='$group_name'")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=13&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    

      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>

</ul> 




</li>





   <?php
$query3=mysqli_query($con,"select * from groupings where connect_to='$op2' and pos=7 and group_name='$group_name'")or die(mysqli_error($con));
$row3=mysqli_fetch_array($query3);
     $op3=$row3['operator_id'];
     
     $queryop3=mysqli_query($con,"select * from user where id='$op3' ")or die(mysqli_error($con));
 $rowop3=mysqli_fetch_array($queryop3);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop3['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop3['firstname'];?> <?php echo $rowop3['lastname'];?></center>
  
  <?php
  if($rowop3['id_number']==""){
  ?>
        <?php
  if($op2!="" && $op2!="0" && $counter>=3){
  ?>
    <a href="operator_reg.php?id=<?php echo $op2;?>&pos=7&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    
      <?php
  }
}
  ?>
    
  </span>
  

<ul>
  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=14 and group_name='$group_name'")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=14&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    

      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>

  <?php
$query4=mysqli_query($con,"select * from groupings where connect_to='$op3' and pos=15 and group_name='$group_name'")or die(mysqli_error($con));
$row4=mysqli_fetch_array($query4);
     $op4=$row4['operator_id'];
     
     $queryop4=mysqli_query($con,"select * from user where id='$op4' ")or die(mysqli_error($con));
 $rowop4=mysqli_fetch_array($queryop4);

?> 
    
       
  <li> <span><center><font size="3px"><b><?php echo $rowop4['id_number'];?></b></font><img src="male.fw.png" width="60px" alt="Italian Trulli"><br><?php echo $rowop4['firstname'];?> <?php echo $rowop4['lastname'];?></center>
  
  <?php
  if($rowop4['id_number']==""){
  ?>
    <?php
  if($op3!="" && $op3!="0" && $counter>=7){
  ?>
    <a href="operator_reg.php?id=<?php echo $op3;?>&pos=15&group_name=<?php echo $group_name;?>" class="btn btn-success btn-sm">REGISTER</a>
    

      <?php
  }
}else{
    
    $iddd=$rowop4['id'];
    ?>
    
      <a href="gen0.php?id=<?php echo $iddd;?>&pos=8&group_name=<?php echo $group_name;?>" class="btn btn-danger btn-sm">OPEN</a>
    <?php
    
}
  ?>
    
  </span>

</li>

</ul> 




</li>
</ul> 




</li>





























</ul> 






</li>
  
  
  
  <?php
 }
  
  ?>
</ul>                     
             
                  
                  
               














                </div>
               
              </div>
            
              
              
              
              
              
             
            </div>
            
            
            
            
            
            
            
          </div>
        </section>
       
      </div>
     <?php
     
     include('footer.php');
     
     ?>