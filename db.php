<?php 
$conn = mysqli_connect("localhost", "root", "", "school");
if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}


?>