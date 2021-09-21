<?php
$conn = new mysqli('localhost', 'root', '' , 'resturant');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$md_pass = md5($password);

$sql = "INSERT INTO customers ( name , email , password ) VALUES ('$name' , '$email' , '$md_pass' )";

if ($conn -> query($sql) === TRUE) {

    echo "Registered successfully";
    header( 'Location: index.html');
} else {
    echo "Error: " . $sql . "<br>". $conn->error;
}

?>