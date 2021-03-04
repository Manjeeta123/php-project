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
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['user_id'];
    
    
    $query = "DELETE FROM users_items WHERE item_id=? AND user_id=? ";
    $stmt=$con->prepare($query);
    $stmt->bind_param("ii",$item_id,$user_id );
    $stmt->execute();
    $stmt->close();      
    $con->close();  
    
    header("location:cart.php");
}
?>