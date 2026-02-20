<?php
include 'db.php';
$sql = "DELETE FROM studet";
if (mysqli_query($conn, $sql)) {
    echo "All student data deleted successfully.";
} else {
    echo "Error deleting student data: " . mysqli_error($conn);
}
$sql2 = "ALTER TABLE studet AUTO_INCREMENT = 1";
mysqli_query($conn, $sql2);



?>