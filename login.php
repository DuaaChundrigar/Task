<?php
$conn = new mysqli('localhost', 'root', '' , 'resturant');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$md_pass = md5($password);


$sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$md_pass' LIMIT 1";
$result = $conn -> query($sql) ;

if ($result->num_rows > 0) {
      header( 'Location: index.html');
} else {
    echo "No user found ";
}

?>