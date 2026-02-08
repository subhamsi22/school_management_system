<?php
$connection = mysqli_connect("localhost", "root", "", "school");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']==="POST"){
$id  =  $_POST['id'];
$sql = "DELETE FROM studet WHERE id  = $id";
if (mysqli_query($connection, $sql)) {
    echo "Student data with ID $id deleted successfully.";
} else {
    echo "Error deleting student data: " . mysqli_error($connection);   
}
}

?>