<?php
include 'db.php';

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