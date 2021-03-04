<?php

require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];


$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success|Fashion vogue</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js">
                     </script>
          <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.min.js">
            </script>
                
        <style>
         .jumbotron{
             background-color: #2cf5ab;}
        </style>
            </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" style="margin-top: 12%;">
            <div class="col-xs-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
      
       
    </body>
</html>