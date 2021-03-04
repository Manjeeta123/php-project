<?php
 require 'include/common.php';
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
                
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
    <div class="row" style="margin-top: 10%; ">
        <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-2">
              <?php
                   if(isset($_SESSION['message'])){
                       if($_SESSION['num']==1){?>
                        <div class="alert alert-warning alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>warning!</strong>
                     <?php
                       echo  $_SESSION['message'];                    
                   ?>  </div><?php } 
                  else if($_SESSION['num']==2){?>
                        <div class="alert alert-success alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Success!</strong>
                     <?php
                       echo  $_SESSION['message'];                    
                   ?>  </div><?php } 
                   else if($_SESSION['num']==3){?>
                        <div class="alert alert-danger alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>OOPS!</strong>
                     <?php
                       echo  $_SESSION['message'];                    
                   ?>  </div><?php } }?>
            
            <form method="POST" action="setting-script.php">
                <h1>Change Password</h1>
                <div class="form-group">
                    <input type="password" name="old-password" placeholder="Old Password"
                           required="TRUE" class="form-control" >
                </div>
                <div class="form-group">
                    <input type="password" name="Newpassword" placeholder="New Password"
                           required="TRUE"    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                      class="form-control" >
                </div>
                <div class="form-group">
                    <input type="password" name="rpassword" placeholder="Re-type Password"
                           required="TRUE"    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                     class="form-control" >
                </div>
                <div class="form-group">
                    <button type="submit" class=" btn btn-info" >Change </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
unset($_SESSION['num']);
unset($_SESSION['message']);

?>
