<?php

session_start();
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

$con = new mysqli("localhost", "root", "", "ecommerce");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];



$stmt = $con->prepare("INSERT INTO contact(name, email, message)VALUES(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    $user_id = mysqli_insert_id($con);
     $stmt->close();      
      $con->close();  
      $_SESSION['mess']='Message is submitted';
    header('location: contact.php');
    ?> 