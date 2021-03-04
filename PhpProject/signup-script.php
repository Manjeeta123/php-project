<?php

$con = new mysqli("localhost", "root", "", "ecommerce");
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


  $name = $_POST['uname'];
  $email = $_POST['uemail'];
  $password = $_POST['upassword'];
  $password = MD5($password);
  $contact = $_POST['ucontact'];
   $city = $_POST['ucity'];
   $address = $_POST['uaddress'];
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email=? ";
  $st = $con->prepare($query); 
$st->bind_param("s", $email);
$st->execute();
 $result = $st->get_result(); 
   $num= $result->num_rows;


   
  if ($num != 0) {
       $m = " * Email Already Exists";
      $_SESSION['message']=$m;
      $st->close();
       $con->close();
     header('location: signup.php');       
  }
  else if (!preg_match($regex_email, $email)) {
       $m = " * Not a valid Email Id";
      $_SESSION['message1']=$m;
      $st->close();
       $con->close();
    header('location: signup.php');
  } else if (!preg_match($regex_num, $contact)) {
       $m = " * Not a valid phone number";
        $_SESSION['message2']=$m;
        $st->close();
        $con->close();
    header('location: signup.php');
  } else {
    
    $stmt = $con->prepare("INSERT INTO users(name, email, password, contact, city, address)VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("sssiss",$name,$email,$password,$contact,$city,$address);
    $stmt->execute();
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
     unset($_SESSION["message"]);
     unset($_SESSION['message1']);
      unset($_SESSION['message2']);
      $stmt->close();      
      $con->close();  
    header('location: home.php');
   
  }
?>
