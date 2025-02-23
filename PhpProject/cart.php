<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
} ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to fashion Vogue</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js">
                    
        </script>

        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.min.js">
            </script>
           
    </head>
    <body>
        <div class="container-fluid" id="content" style="margin-top: 12%;">
            <?php include 'header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped table-condensed ">
                           <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                  
                                </tr>
                            </thead>
                      
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items"
                                . " JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' "
                                . "and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                           
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" 
                                            . $row["Name"] . "</td><td>Rs " . $row["Price"] .
                                            "</td><td><a href='cart-remove.php?id={$row['id']}"
                                            . "' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum .
                                        "</td><td><a href='success.php?itemsid=" . $id . 
                                        "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<h4 style='color:#ffb203;'> Add items to the cart first !!</h4><br>";
                        }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
      
    </body>
</html>

