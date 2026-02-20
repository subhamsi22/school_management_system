<?php
include 'db.php';


echo '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student Result</title>
<style>
body{font-family:Arial,Helvetica,sans-serif;background:#f4f7fb;color:#333;padding:20px}
.container{max-width:700px;margin:30px auto}
.card{background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.08);padding:20px;margin-bottom:16px}
.card h2{margin:0 0 12px;color:#2b6cb0}
.answers{display:grid;grid-template-columns:repeat(2,1fr);gap:8px}
.answer{background:#f6f9ff;border:1px solid #e6eef8;padding:10px;border-radius:6px;font-size:14px}
.notice{background:#fff3cd;border:1px solid #ffeeba;padding:12px;border-radius:6px;color:#856404}
</style>
</head>
<body>
<div class="container">';

if(isset($_POST["student_name"])){
    $student_name = $_POST["student_name"];
    $sqll = "SELECT * FROM `exam2` WHERE student_id = '$student_name'";
    $result = mysqli_query($conn, $sqll);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '<h2>Student ID: ' . $row["student_id"] . '</h2>';
            echo '<div class="answers">';
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="answer"><strong>Answer ' . $i . ':</strong> ' . $row["answer_$i"] . '</div>';
            }
            echo '</div></div>';
        }
    } else {
        echo '<div class="notice">No results found for student ID: ' . $student_name . '</div>';
    }
} else {
    echo '<div class="notice">No student ID provided.</div>';
}

echo '</div></body></html>';

?>