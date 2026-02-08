<?php 
$conn = mysqli_connect("localhost","root","","school");
if(!$conn){
    die("Error".mysqli_connect_error());
}
$sql =  'SELECT COUNT(*) AS total FROM techdet';
$result =  mysqli_query($conn,$sql);
$row=  mysqli_fetch_assoc($result);
echo $row['total'];

?>