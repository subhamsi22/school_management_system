<?php 
$conn = mysqli_connect("localhost","root","","school");
if (!$conn) {   
    die("Database connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']==="POST"){
$question_1 = $_POST['question_1'];  
$question_2 = $_POST['question_2'];
$question_3 = $_POST['question_3'];
$question_4 = $_POST['question_4'];
$question_5 = $_POST['question_5'];
$question_6 = $_POST['question_6'];
$question_7 = $_POST['question_7'];
$question_8 = $_POST['question_8'];
$question_9 = $_POST['question_9'];
$question_10 = $_POST['question_10'];
$sql = "INSERT INTO `exam` ( `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`) 
VALUES ('$question_1', '$question_2', '$question_3', '$question_4', '$question_5', '$question_6', '$question_7', '$question_8', '$question_9', '$question_10')";
if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);   

}
}

?>