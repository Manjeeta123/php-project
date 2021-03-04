<?php
session_start();
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

$con = new mysqli("localhost", "root", "", "ecommerce");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$email = $_POST['lemail'];

$password = $_POST['lpassword'];
$password = MD5($password);
// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM users WHERE email=? AND password=?";
$st = $con->prepare($query); 
$st->bind_param("ss", $email,$password);
$st->execute();
$result = $st->get_result();    
$num=$result->num_rows;


if ($num == 0) {   
  $_SESSION['mes']= "Please enter correct E-mail id and Password";
  $st->close();
  $con->close();
   header('location:index.php');
} else {  
  $row = $result->fetch_array();
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  unset($_SESSION['mes']);
  $st->close();
  $con->close();
  header('location: home.php');
}
?>