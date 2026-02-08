<?php 
$connection = mysqli_connect("localhost", "root", "", "school");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}   
$sql = "DELETE FROM techdet";
if (mysqli_query($connection, $sql)) {
    echo "All records deleted successfully";
} else {
    echo "Error deleting records: " . mysqli_error($connection);
}

$sql2 = "ALTER TABLE techdet AUTO_INCREMENT = 1";
mysqli_query($connection, $sql2);
?>