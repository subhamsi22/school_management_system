<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
</head>
<body>
    <?php
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tex = $_POST['text'];
    $messag = $_POST['message'];

    
   include 'db.php';

    $sql = "INSERT INTO schoolstu
     (name, email, tex, messag) 
     VALUES ('$name' , '$email', '$tex',
      '$messag')";

if($conn->query($sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
}
    
    ?>
</body>
</html>