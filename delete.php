<?php
include_once('connection.php');
 $email = $_GET['email'];
 echo $query = "delete from registration where email='".$email."'";

$conn->exec($query);
  echo "Record deleted successfully";
 
// header('location:crud_operations.php');
?>
 