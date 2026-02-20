<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['techerame'];
    $age=$_POST['techerage'];
    $address=$_POST['teacheraddress'];
    $subject=$_POST['teacherclass'];

    $sql="INSERT INTO `techdet`(`name`, `age`, `adress`, `class`) VALUES ('$name','$age','$address','$subject')";
    if(mysqli_query($conn,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error:". $sql ."<br>". mysqli_error($conn);
    }
    mysqli_close($conn);
}   
?>