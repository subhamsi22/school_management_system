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
        .question{
          background: #fff0f0;
    height: 114px;
    width: 79%;
    position: relative;
    text-align: center;
    border-radius: 20px;
    left: 14%;
    border-left: 2px solid blue;
        }   
    </style>
</head>
<body>





    <h1>
        welcome to your exam 
    </h1>
    <p>each questions conatin 2 marks </p>
    <p> 2 * 10 = 20</p>
<label for="">student name</label>

<?php

echo "<form action='phptemp2.php' method='POST'>";    
echo "<input type='text' name='student_id' id='student_name' placeholder='enter your name here' required>";

for($i =1;$i<=10;$i++){
    include "tempphp1.php";
    echo "<div class='question'>";
    echo "<h1>$i question is: " . $row["question_$i"] ."</h1>";
    echo "<input type='text' name='answer_$i' id='hh' placeholder='enter the answer here'>";
    echo "</div>";
}
    
echo "<div style='text-align:center;margin-top:20px;'><button type='submit'>submit</button></div>";
echo "</form>";

?>





</body>
</html>



