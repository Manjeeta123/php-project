<?php
require "include/common.php";

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
         <title>Fashion Vogue</title>
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
        .alert{
            margin-top: 2%;
        }
        
    </style>
    </head>
    <body>
    
       
     <?php
            require 'header.php';
            ?><br>
            <br>
                  <?php if(isset($_SESSION['mes'])){ ?>
                        <div class="alert alert-warning alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>warning!</strong>
                     <?php
                       echo  $_SESSION['mes'];                    
                   ?>  </div><?php }
                                      ?>
             
        <div class="container-fluid " style=" margin-top: 2%;">
             <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body ">
                            <div class="thumbnail">
                            <img src="images/beg1.png" alt="beg1">
                            </div>
                             <p>Fashion vogue Women stylish Purse ₹650</p></div>
                        <div class="panel-footer">
                           <button class="btn btn-block btn-primary"   data-toggle="modal" data-target="#mymodal"> Order Now</button>
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
                            <p>Lather Handbag ,Travel Bag Two in One Purse Rs. 1300</p></div>
                        <div class="panel-footer">                           
                            <button class="btn btn-block btn-primary"  data-toggle="modal" data-target="#mymodal"> Order Now</button>
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
                          <p>Magic Zone Ladies Handbag, Fashion Handbag for Women Leather Rs. 1500</p></div>
                        <div class="panel-footer">
                            <button class="btn btn-block btn-primary"  data-toggle="modal" data-target="#mymodal"> Order Now</button>
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
                            <p>New Women Leather Bag Large Capacity Shoulder Bag Casual and Simple Top-handle Rs.750 </p>
                       </div>
                        <div class="panel-footer">
                                 <button class="btn btn-block btn-primary"   data-toggle="modal" data-target="#mymodal"> Order Now</button>
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
                             <p>Large capacity hand Bag Branded brown bag Rs.780</p>
                        </div>
                        <div class="panel-footer">
                           
                            <button class="btn btn-block btn-primary"   data-toggle="modal" data-target="#mymodal"> Order Now</button>
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
                         <p>Plain Handbag Ladies Green Handbag
                                    Rs. 790</p></div>
                        <div class="panel-footer">
                            
                            <button class="btn btn-block btn-primary"  data-toggle="modal" data-target="#mymodal"> Order Now</button>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
         
          <?php 
          require 'footer.php';?>
        
       
    </body>
    
</html>

<?php
unset($_SESSION['mes']);
?>
   
