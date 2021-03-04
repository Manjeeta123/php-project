<?php
    
//This code checks if the product is added to cart. 
function check_if_added_to_cart($item_id) {
  
     $con = new mysqli("localhost", "root", "", "ecommerce");
// Check connection
     if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
         }
    $user_id = $_SESSION['user_id']; 
      $query = "SELECT * FROM users_items WHERE item_id=? AND user_id =? AND status=? ";
    $status='Added to cart';
      $st=$con->prepare($query);
    $st->bind_param("iis",$item_id,$user_id,$status );
    $st->execute();
      $result = $st->get_result();    
     $num=$result->num_rows;
    if ($num >= 1) {
         $st->close();      
         $con->close();  
        return 1;
         } else {
         $st->close();      
         $con->close();  
         return 0;
    }
}

?>