<?php 
$conn = mysqli_connect("localhost","root","","school");
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$sql = "SELECT COUNT(*) AS total FROM studet";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

echo $row['total'];

?>