<?php
 require 'include/common.php';
include'include/check-if-added.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
 ?>
<html>
    <head>
        <title>Welcome To Fashion Vogue</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js">
                    
        </script>

        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.min.js">
            </script>
               
    <style>
        .btn-primary{
            background-color: #2486da;           
        }
        
        
    </style>
    </head>
    <body>
        <?php 
        require 'header.php';
  ?>
        
        
        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body ">
                            <div class="thumbnail">
                            <img src="images/beg1.png" alt="beg1">
                            </div>
                             <p>1.Fashion Women stylish Purse ₹650</p></div>
                        <div class="panel-footer">
                             <?php
                                if (check_if_added_to_cart(1)) { 
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                               <?php } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                           
                        </div>
                        
                    </div>
                </div>
                
                 <div class="col-sm-4 col-xs-12">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                            <img src="images/beg2.png" alt="beg2"> 
                            </div>
                            <p>2.Lather Handbag,Travel Bag two in one Purse Rs. 1300</p></div>
                        <div class="panel-footer">   
                               <?php
                                if (check_if_added_to_cart(2)) { 
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                               <?php } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }                           
                            ?>
                           
                        </div>
                        
                    </div>
                </div>
                
                 <div class="col-sm-4  col-xs-12">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                            <img src="images/beg3.png" alt="beg3">  
                            </div>
                          <p>3.Magic Zone Ladies Handbag, Fashion Handbag for Women Leather Rs. 1500</p></div>
                        <div class="panel-footer">
                               <?php
                                if (check_if_added_to_cart(3)) { 
                                ?>    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                               <?php } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
              <div class="row">
                <div class="col-sm-4 col-xs-12 ">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                             <img src="images/beg4.png" alt="beg4"> 
                            </div>
                            <p>4.New Women Leather Bag Large Capacity Shoulder Bag Casual and Simple Top-handle Rs.750 </p>
                       </div>
                        <div class="panel-footer">
                               <?php
                                if (check_if_added_to_cart(4)) { 
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                              <?php  } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                        </div>
                        
                    </div>
                </div>
                
                 <div class="col-sm-4 col-xs-12">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                 <img src="images/beg5.png" alt="beg5"> 
                            </div>
                             <p>5.Large capacity hand Bag Branded brown bag Rs.780</p>
                        </div>
                        <div class="panel-footer">
                              <?php
                                if (check_if_added_to_cart(5)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                               <?php } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                           
                        </div>
                        
                    </div>
                </div>
                
                 <div class="col-sm-4 col-xs-12">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                            <img src="images/beg6.png" alt="beg6"> 
                            </div>
                         <p>6.Plain Handbag Ladies casual Green Handbag
                                    Rs. 790</p></div>
                        <div class="panel-footer">
                               <?php
                                if (check_if_added_to_cart(6)) { 
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                               <?php } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                           
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
         
        
    </body>
</html>

