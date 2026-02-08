<?php
$connection = mysqli_connect("localhost", "root", "", "school");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM studet";
if (mysqli_query($connection, $sql)) {
    echo "All student data deleted successfully.";
} else {
    echo "Error deleting student data: " . mysqli_error($connection);
}
$sql2 = "ALTER TABLE studet AUTO_INCREMENT = 1";
mysqli_query($connection, $sql2);



?>