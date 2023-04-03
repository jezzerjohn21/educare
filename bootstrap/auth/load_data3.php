<?php

$connect = new PDO("mysql:host=localhost;dbname=loyaleadsta", "loyaleadsta", "loyaleadsta");

if(isset($_POST["type3"]))
{
    

 if($_POST["type3"] == "category_data")
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
  SELECT * FROM refbrgy   WHERE citymunCode = '".$_POST["category_id3"]."' 
  ORDER BY brgyDesc ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
 'id'  => $row["brgyCode"],
    'name'  => $row["brgyDesc"]
   );
  }
  echo json_encode($output);
  
  
  
  
  
  
 }
}

?>