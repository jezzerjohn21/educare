<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Activity Logs</h2>

<?php


$con = mysqli_connect("localhost","loyaleadsta","loyaleadsta","loyaleadsta");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  


?>


<table>
  <tr>
    <th>No.</th>
    <th>Users</th>
    <th>Remarks</th>
       <th>Date Added</th>
          <th>IP Address</th>
  </tr>
  
  
  	  <?php
	
	
			    $query2=mysqli_query($con,"select * from logs ")or die(mysqli_error());
				while($row1=mysqli_fetch_array($query2)){
			  ?>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  	  <?php
				}
			  ?>
</table>

</body>
</html>

