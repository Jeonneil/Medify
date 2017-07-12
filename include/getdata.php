<?php
  include 'connect.php';

$data = array();
  
$sql = mysqli_query($conn, "SELECT * FROM medicine_list");
while($row = mysqli_fetch_assoc($sql)){
//  echo $row['medicine_name'];
//  echo $row['medicine_quantity'];
  array_push($data, $row);
}

echo json_encode($data);
?>