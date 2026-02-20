<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['stuname'];
    $age = $_POST['stuage'];
    $address = $_POST['stuaddress'];
    $class = $_POST['stuclass'];

    $sql = "INSERT INTO studet (name, age, address, class) VALUES ('$name', '$age', '$address', '$class')";
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>