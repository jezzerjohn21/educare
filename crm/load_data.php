<?php

$connect = new PDO("mysql:host=localhost;dbname=loyaleadsta", "loyaleadsta", "loyaleadsta");

if(isset($_POST["type"]))
{
    

 if($_POST["type"] == "category_data")
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
  SELECT * FROM refprovince 
  WHERE regCode = '".$_POST["category_id"]."' 
  ORDER BY provDesc ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["provCode"],
    'name'  => $row["provDesc"]
   );
  }
  echo json_encode($output);
 }
}

?>