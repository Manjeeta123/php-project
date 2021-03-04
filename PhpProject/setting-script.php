<?php

include 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['Newpassword'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass= md5($new_pass);

$new_passl = $_POST['rpassword'];
$new_passl = mysqli_real_escape_string($con, $new_passl);
$new_passl= md5($new_passl);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if($new_pass != $new_passl){
    $_SESSION['message']="The new password and re-typed password should be same";
    $_SESSION['num']=1;
    header('location: setting.php');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
         $_SESSION['message']="Password updated";
          $_SESSION['num']=2;
        header('location: setting.php?');
    } else{
        $_SESSION['message']=" Wrong Old Password";
         $_SESSION['num']=3;
        header('location: setting.php');
}}
?>
