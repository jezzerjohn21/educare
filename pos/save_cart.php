<?php 

     include('../dist/dbcon.php');

session_start();
date_default_timezone_set("Asia/Manila"); 



$name = isset($_POST['prod_id']) ? $_POST['prod_id'] : '';
$descr = isset($_POST['descr']) ? $_POST['descr'] : '';
$qty = isset($_POST['qty']) ? $_POST['qty'] : '';
$cus = isset($_POST['cus']) ? $_POST['cus'] : '';

	$query21a1a=mysqli_query($con,"select * from  products where id='$name'")or die(mysqli_error());
$row21a1aa=mysqli_fetch_array($query21a1a);




$price=$row21a1aa['prod_price']*$qty;
if($qty>=1){

	$query21a1=mysqli_query($con,"select * from  cart where prod_id='$name' and added_by='$descr' and status=''")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);

if($row21a1a<=0){
		  mysqli_query($con,"INSERT INTO cart(price,prod_id,qty,added_by,cust_id) VALUES('$price','$name','$qty','$descr','$cus')")or die(mysqli_error($con));
}else{
    
    	mysqli_query($con,"update cart set qty='$qty',price='$price' where prod_id='$name' and added_by='$descr' and status=''")or die(mysqli_error());
    
}
}else{
    
    $result=mysqli_query($con,"DELETE FROM cart where prod_id='$name' and added_by='$descr' and status=''")
	or die(mysqli_error());

    
}






     include('../dist/dbcon.php');

session_start();
$sid=$_SESSION['id'];


$queryusers=mysqli_query($con,"SELECT sum(price) as total FROM cart WHERE added_by='$sid' and status='' ")or die(mysqli_error($con));
$rowuser=mysqli_fetch_array($queryusers);

$td=0;
$td2=0;
$querydiscount=mysqli_query($con,"select * from  cart_dis  where added_by='$sid' and status=''")or die(mysqli_error());
while($count=mysqli_fetch_array($querydiscount)){
    $dis=$count['dis_id'];
    
    

    
    
    $queryusers2=mysqli_query($con,"SELECT sum(percentage) as total FROM discounts WHERE id='$dis' and type='Percentage' ")or die(mysqli_error($con));
$rowuser2=mysqli_fetch_array($queryusers2);
$td=$td+$rowuser2['total']/100;


     $queryusers22=mysqli_query($con,"SELECT sum(percentage) as total FROM discounts WHERE id='$dis' and type='Fixed' ")or die(mysqli_error($con));
$rowuser22=mysqli_fetch_array($queryusers22);
$td2=$td2+$rowuser22['total'];




    
}


					
			
						
 $queryusers2ta=mysqli_query($con,"SELECT sum(percentage) as total FROM tax WHERE type='Percentage' ")or die(mysqli_error($con));
$rowuser2ta=mysqli_fetch_array($queryusers2ta);
$taxp=$rowuser2ta['total']/100;

 $queryusers2taf=mysqli_query($con,"SELECT sum(percentage) as total FROM tax WHERE type='Fixed' ")or die(mysqli_error($con));
$rowuser2taf=mysqli_fetch_array($queryusers2taf);
$taxpf=$rowuser2taf['total'];










$name = $_POST['user_name'];
$id=$rowuser['total'];
$vat2=$rowuser['total']*$taxp;
$vat=$taxpf+$vat2;


$tot=$id;

$disdis=$tot*$td;

$dd=number_format($disdis+$td2,2);
$tot2=$tot-$dd;


    $return_arr[] = array("id" => $rowuser['total'],
                    "username" => $vat,
                    "dis" => $dd,
                    "name" => $tot2,
                    "email" => $rowuser['total']);

echo json_encode($return_arr);







?>