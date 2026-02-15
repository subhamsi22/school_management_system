<?php
$conn    = mysqli_connect("localhost","root","","school");
if(!$conn){
    die("not reached to the databse".mysqli_connect_error());
}
$sql = "SELECT *  FROM exam";
$result = mysqli_query($conn,$sql);          
$row =  mysqli_fetch_assoc($result)
?>
