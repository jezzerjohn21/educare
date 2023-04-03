<?php

$connect = new PDO("mysql:host=localhost;dbname=loyaleadsta", "loyaleadsta", "loyaleadsta");

if(isset($_POST["type2"]))
{
    

 if($_POST["type2"] == "category_data")
 {
  $query = "
  SELECT * FROM refregion 
  ORDER BY regDesc ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["regCode"],
    'name'  => $row["regDesc"]
   );
  }
  echo json_encode($output);
 }
 else
 {
     

  $query = "
  SELECT * FROM refcitymun 
  WHERE provCode = '".$_POST["category_id2"]."' 
  ORDER BY citymunDesc ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
 'id'  => $row["citymunCode"],
    'name'  => $row["citymunDesc"]
   );
  }
  echo json_encode($output);
  
  
  
  
  
  
 }
}

?>