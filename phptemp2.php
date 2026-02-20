<?php
include 'db.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = isset($_POST['student_id']) ? mysqli_real_escape_string($conn, $_POST['student_id']) : '';
    
    if(empty($student_id)) {
        die("Student ID is required");
    }
    
    // Build the insert statement safely
    $columns = ["student_id"];
    $values = ["'" . $student_id . "'"];
    
    for ($i = 1; $i <= 10; $i++) {
        $columns[] = "answer_$i";
        $answer = isset($_POST["answer_$i"]) ? mysqli_real_escape_string($conn, $_POST["answer_$i"]) : '';
        $values[] = "'" . $answer . "'";
    }
    
    $sqll = "INSERT INTO `exam2` (" . implode(", ", $columns) . ") VALUES (" . implode(", ", $values) . ")";
    
    $result = mysqli_query($conn, $sqll);
    
    if($result) {
        echo "Data submitted successfully!";
        // Optionally redirect after 2 seconds
        // header("refresh:2;url=exam_question.php");
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>