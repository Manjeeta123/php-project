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
        
        <title> Fashion Vogue</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/jquery-3.5.1.min.js">
                    
        </script>

        <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.min.js">
            </script>
                
            <style>
                .msg{
                    color:red;
                }
                .btn-success {
                 color: #0a0101;
                 background-color: #ffe214;
                  border-color:#9e9901;
                 }
            </style>
         
    </head>
    <body>
        
            <?php 
            require 'header.php';?>
        <div class='container-fluid' style='margin-top:8%; margin-bottom: 5%;'>
        <div class="row">
            <div class="col-sm-6 col-xs-12" >
                <div class="thumbnail" style="border-width: 0px;" >
                    <img src='images/signup.jpg' class="img-rounded" alt='contact'> 
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                
                <form method="post" action="signup-script.php">
                    <h2>Signup</h2>
                    <div class="form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Name" required="true">
                    </div>
                     <div class="form-group">
                        <input type="email" name="uemail" class="form-control" placeholder="Email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="true" >
                                     <?php
                    if(isset($_SESSION['message'])){
                        $error = $_SESSION['message'];?>
                        <span class="msg" ><?php echo $error ;?></span>
                   <?php }
                    if(isset($_SESSION['message1'])){
                         $error = $_SESSION['message1'];?>
                       <span class="msg"><?php  echo $error ;?></span>
                 <?php   }
                   
                ?>
                                   
                    </div>
                     <div class="form-group">
                         <input type="password" name="upassword" class="form-control" placeholder="Password"
                                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" >
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  maxlength="10" size="10" name="ucontact" required = "true" 
                               placeholder="Contact Number" >
                            <?php
                                if(isset($_SESSION['message2'])){
                               $error = $_SESSION['message2'];?>
                                <span class="msg" ><?php  echo $error;?></span>
                         <?php       }
                          ?>
                             
                    </div>
                     <div class="form-group">
                        <input type="text" name="ucity" class="form-control" placeholder="City" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" name="uaddress" class="form-control" placeholder="Address" required="true">
                    </div>
                     <div class="form-group">
                    <button type='submit' class='btn btn-success'>Submit</button> 
                     </div> 
                </form>
            </div>
        </div>
     </div>
        <?php
        require 'footer.php';?>
        
    </body>
</html>

<?php 
unset($_SESSION['message']);
unset($_SESSION['message1']);
unset($_SESSION['message2']);
?>