<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL Exam Pper</title>
    <style>
        h1,p{
           font-size: 33px;
    text-align: center;
    text-transform: capitalize;
        }
        #hh{
            display: flex;
    justify-content: center;
    text-align: center;
    position: relative;
    align-items: center;
    height: 32px;
    text-transform: capitalize;
    width: 100%;
        }
    </style>
</head>
<body>
    <h1>
        welcome to your exam 
    </h1>
    <p>each questions conatin 2 marks </p>
    <p> 2 * 10 = 20</p>

<?php
$conn    = mysqli_connect("localhost","root","","school");
if(!$conn){
    die("not reached to the databse".mysqli_connect_error());
}
$sql = "SELECT *  FROM exam";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while($row =  mysqli_fetch_assoc($result)){
for($i =1;$i<=10;$i++){
        echo "<h1>$i qusiton is: " . $row["question_$i"] ."</h1>";
        echo "<input type='text' name='answer_$i' id='hh' placeholder='enter the answer hear'>";

}
    }
}

?>





</body>
</html>



