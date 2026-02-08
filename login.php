<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login -  for sms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bannerlogin">


 <?php
            session_start();
            $conn  = mysqli_connect("localhost","root","","school");

            if(!$conn){
                die("connection failed:".mysqli_connect_error());
            }
            $sql = "SELECT * FROM signup ";
            $result =  mysqli_query($conn,$sql);
            $row =  mysqli_fetch_assoc($result);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username  =  $_POST['username'];
    $password  =  $_POST['password'];
    if($username == $row['username'] &&  $password == $row['pass']){
       $_SESSION['admin'] = $username;
    echo "<script>alert('login successful')</script>";
        header("Location: admin.php");
        exit();
    }
    else {
        echo "<script>alert('invalid credentials')</script>";   
    }
}


            
            ?>
            
            <legend><h2>Login Form</h2></legend>
            <form id="form3" method="post">
                <label for="username">Username:</label><br>
                <input class="input"  type="text" id="username" name="username" required><br><br>
                
                <label for="password">Password:</label><br>
                <input  class="input"  type="password" id="password" name="password" required><br><br>
                
                <input  class="input"  type="submit" value="Login">
            </form>
           

      
    </div>
</body>
</html>