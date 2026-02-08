<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up -  for sms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bannerlogin">
<?php
$conn =  mysqli_connect("localhost","root","","school");
if(!$conn){
die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username already exists
    $checkUserQuery = "SELECT * FROM signup WHERE username = '$username'";
    $result = mysqli_query($conn, $checkUserQuery);
    
    if(mysqli_num_rows($result) > 0){
        echo "<p class='error'>Username already exists. Please choose a different username.</p>";
    } else {
        // Insert new user into the database
        $insertQuery = "INSERT INTO signup (username, pass)
         VALUES ('$username', '$password')";
        if(mysqli_query($conn, $insertQuery)){
            echo "<p class='success'>Sign up successful! You can now log in.</p>";
            echo "<script>
            aleart('Sign up successful! You can now log in.');
            </script>";
            //             header("Location: login.php");

            // exit();

        } else {
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>
            
            <h2>sign up Form</h2>
            <form  method="post">
                <label for="username">Username:</label><br>
                <input class="input"  type="text" id="username" name="username" required><br><br>
                
               <label for="password">Password:</label><br>
                <input  class="input"  type="password" id="password" name="password" required><br><br>
                
                <input  class="input"  type="submit" value="sign up">
            </form>
      
    </div>
</body>
</html>