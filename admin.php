<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to admin of abc school</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<div class="admin-container">

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li id="d">Dashboard</li>
      <li id="u">Users</li>
      <li id="e">Exams</li>
      <li id="r">Results</li>
      <li id="s">Settings</li>
      <li id="l">Logout</li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>Dashboard</h1>

    <div class="cards">
      <div class="card">Students<br><span>
<?php
 include 'getdata.php';
 
?>


      </span></div>
      <script>
          var phpdata =  <?php json_encode(include 'getdata.php');
    ?>
      </script>
      <div class="card">Teachers<br><span><?php include 'getdata2.php'?></span></div>
      <div class="cardd">
        <div class="dataaa">
<?php
echo "studests data graph";
 ?>
         
        </div>
      
      <br></div>
      <div class="cardd">
               <div  class="dataaaa">
<?php
echo "teacher data graph";
 ?>
 <script> 
var ph2 =  <?php json_encode(include 'getdata2.php');
    ?>

 </script>
         
        </div>
      
      
      </div>
    </div>
  

<div class="time-table">
<h1>Date & Time</h1>
<br>
<?php
echo "<h1 id='timeh1'>" . date("D") ." </h1>"."<br>";
echo "<h1 id='timeh2'>" . date("M") ." </h1>"."<br>";
echo "<h1 id='timeh3'>" . date("Y") ." </h1>"."<br>";
if(date("A") == "AM"){
  echo "<h1 id='timeh5'>good morning </h1>"."<br>";
}
else if(date("A") == "PM" && date("H") < 18){
  echo "<h1 id='timeh5'>good evening </h1>"."<br>";
}
else{
  echo "<h1 id='timeh5'>good afternoon </h1>"."<br>";
}
?>


</div>
<div class="deletbut">


  <button id="delet" >  click here to delete student data</button>


<form action="iddelete.php" method = "post">

<input type="number" placeholder="enter id to delete" name="id" id="inputtid" required>
<button id="delett" name ="deletee">submit</button>

</form>

<!-- techer manipultion -->
 

  <button class="tech" id="deletbut" >  click here to delete teacher data</button>



<form action="iddeletetech.php" method = "post">

<input type="number" placeholder="enter id to delete" name="id" id="inputtidtech" required>
<button id="deletttech" name ="deletee">submit</button>

</form>
</div>


</div>


<div class="main_c2">

  <form id="form1" action="form1.php" method="post">
    <label for="sub">name of student</label>
    <input type="text" name="stuname" id="inputt" required>
    <br>
    <br>
    <label for="sub">age</label>
    <input type="number" name="stuage" id="inputt" required>
    <br>
    <br>
    <label for="sub">address</label>
    <input type="text" name="stuaddress" id="inputt" required>


    <br>
    <br>
    <label for="sub">class</label>
    <input type="text" name="stuclass" id="inputt" required>
    <br>
       
    <input id="sub" type="submit" value="Add Student">
  </form>
<!-- from 2 for techer -->


  <form id="form1" action="from2.php" method="post">

    <label for="sub">name of teachers</label>
    <input type="text" name="techerame" id="inputt" required>
    <br>
    <br>
    <label for="sub">age</label>
    <input type="number" name="techerage" id="inputt" required>
    <br>
    <br>
    <label for="sub">address</label>
    <input type="text" name="teacheraddress" id="inputt" required>


    <br>
    <br>
    <label for="sub">subject</label>
    <input type="text" name="teacherclass" id="inputt" required>
    <br>
       
    <input id="sub" type="submit" value="Add teacher">
  </form>

<!-- end -->



</div>
<div class="slidebutton">
  <div class="ball"></div>


</div>
<div class="main_content2">
  <h1 class="hg" id="stud">students data  </h1>
  <h1 class="hg2" id="stud">teacher data  </h1>

  <div class="table">
    <table id="jst">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Class</th>
      </tr>
      <?php
       
$connection = mysqli_connect("localhost", "root", "", "school");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

      $sql1 = "SELECT * FROM studet";
      $result1 = mysqli_query($connection,$sql1);

      if (mysqli_num_rows($result1) > 0) {
          while($roww = $result1->fetch_assoc()) {
              echo "<tr>
                      <td>" . $roww["id"] . "</td>
                      <td>" . $roww["name"] . "</td>
                      <td>" . $roww["age"] . "</td>
                      <td>" . $roww["address"] . "</td>
                      <td>" . $roww["class"] . "</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='5'>No students found</td></tr>";
      }
      mysqli_close($connection);
      ?>
    </table>
    <div class="table2">
      <table id="jst2">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Address</th>
          <th>Subject</th>
        </tr>
        <?php

$conn2 =  mysqli_connect("localhost", "root", "", "school");
if (!$conn2) {
  die("Database connection failed: " . mysqli_connect_error());
}
$msql2 = "SELECT * FROM techdet";
$result2  = mysqli_query($conn2,$msql2);
if(mysqli_num_rows($result2) > 0){
  while($rowww =  $result2->fetch_assoc()){

  echo "<tr>
  <td>" . $rowww["id"] . "</td>
  <td>" . $rowww["name"] . "</td>
  <td>" . $rowww["age"] . "</td>  
  <td>" . $rowww["adress"] . "</td>
  <td>" . $rowww["class"] . "</td>
</tr>";
  }
}
  else {
    echo "<tr><td colspan='5'>No teachers found</td></tr>";
  }

mysqli_close($conn2);


?>


        </table>
  </div>
</div>

</div>
<!-- INSERT INTO `exam` (`id`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_19`, `question_10`)
  VALUES ('1', 'POIPP', 'IOPPI', 'PIPO', 'OP', 'PIOPIOP', 'IOPIP', 'IPOIPI', 'IPOOIP', 'IOPPIOP', 'IOP'); -->
<div class="mainforexam">
<h1 class="hg">crate a 2 * 10 =20 exams paper hear </h1>
<form action="exam.php" method="POST">
<fieldset>
  <label for="question_1"> question_1</label>
  <input type="text" name='question_1' id="inputt" required>
  <br>
  <br>
  <label for="question_2"> question_2</label>
  <input type="text" name='question_2' id="inputt" required>
  <br>
  <br>
  <label for="question_3"> question_3</label>
  <input type="text" name='question_3' id="inputt" required>
  <br>
  <br>
  <label for="question_4"> question_4</label>
  <input type="text" name='question_4' id="inputt" required>
  <br>
  <br>
  <label for="question_5"> question_5</label>
  <input type="text" name='question_5' id="inputt" required>
  <br>
  <br>
    <label for="question_6"> question_5</label>

  <input type="text" name='question_6' id="inputt" required>
  <br>
  <br>
  <label for="question_7"> question_7</label>
  <input type="text" name='question_7' id="inputt" required>
  <br>
  <br>
  <label for="question_8"> question_8</label>
  <input type="text" name='question_8' id="inputt" required>
  <br>
  <br>
  <label for="question_9"> question_9</label>
  <input type="text" name='question_9' id="inputt" required>
  <br>
  <br>
  <label for="question_10"> question_10</label>
  <input type="text" name='question_10' id="inputt" required>
  <br>
  <br>
  <input id="sub" type="submit" value="create exam">
</fieldset>
</form>
<a href="exam_question.php"><button id="exm">click hear</button></a>

</div>
<div class="resultsection">
  <h1 class="hg">check the result of the exam here </h1>
  <input type="text" name="student_name" placeholder="enter student name to check result" id="inputt">
  <a href="result.php"><button id="res">click hear</button></a>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="st2.js"></script>
</body>
</html>