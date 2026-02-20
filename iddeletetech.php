<?php
include 'db.php';
   
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deletee"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM techdet WHERE id = $id";
    if (mysqli_query($connection, $sql)) {
        echo "Record with ID $id deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}

?>