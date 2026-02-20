<?php 
include 'db.php';   
$sql = "DELETE FROM techdet";
if (mysqli_query($conn, $sql)) {
    echo "All records deleted successfully";
} else {
    echo "Error deleting records: " . mysqli_error($conn);
}

$sql2 = "ALTER TABLE techdet AUTO_INCREMENT = 1";
mysqli_query($conn, $sql2);
?>