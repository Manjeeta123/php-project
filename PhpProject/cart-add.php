<?php
  session_start();
  if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
  $con = new mysqli("localhost", "root", "", "ecommerce");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $status='Added to cart';
    $stmt = $con->prepare("INSERT INTO users_items(user_id, item_id, status)VALUES(?,?,?)");
    $stmt->bind_param("iis",$user_id,$item_id,$status );
    $stmt->execute();
    $stmt->close();      
    $con->close();  
    header('location: home.php');
   }
?>   