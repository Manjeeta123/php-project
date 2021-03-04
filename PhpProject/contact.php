<?php
session_start();
if(isset($_SESSION['email'])){
    header('Location: home.php');
}?>
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
                
       <link rel="stylesheet"  type="text/css" href="css/index.css">
      
       
    </head>
    <body>
        <?php 
        require 'header.php';
        ?>
        <div class="container" style="margin-top:10%; " >
            <div class="row">
                <div class="col-sm-8  col-xs-12">
                     <h1>LIVE SUPPORT</h1>
                    
                <h3>24 hours | 7 days a week | 365 days a year Live Technical Support </h3>
                <hr >
               
                <h4> Online customer support  enables you to make friendly, 
                    personable contact with us that comes to our shopping store.
                    It's a way to give you an opportunity to get answers right  so you can keep shopping 
                    confidently.
              </h4> 
                </div>
                <div class="col-sm-4 col-xs-10">
                    <div class="thumbnail" style="border-width: 0px;">
                        <img   class="img-circle"  src="images/contactlogo.png" ></div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-7">
                    <form method="POST" action="contact_script.php" > 
                        
                        <h2> Contact US </h2>
                         <?php
                   if(isset($_SESSION['mess'])){
                  
                       ?>
                        <div class="alert alert-success alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Success!</strong>
                     <?php
                       echo  $_SESSION['mess'];                    
                   ?>  </div><?php  } ?>
             
                        <div class="form-group">
                            <input type="text"  class="form-control" name="username"  required="true"  placeholder="Name" >
                        </div>
                         <div class="form-group">
                            <input type="email"  class="form-control" name="username" placeholder="Email" 
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  required="true" >
                        </div>
                         <div class="form-group">
                             <textarea  input="text" class="form-control" style="height:120px;" name="Message" 
                                        required="true" 
                                        placeholder="Message" ></textarea>
                        </div>

                        <button type="submit" class="btn btn-success"> Submit</button>
                        
                    </form>
                    
                </div>
                
                    <div class="col-xs-12 col-sm-5">
                        <h2> Company information</h2>
                        <p> 4E-14, Ecotech I, Udyog vihar,Greater Noida (UP) </p>
                        <p>Phone: 00-222-00234200</p>
                        <p>Email: info@gmail.com</p>
                        <p>Follow on :Facebook, Twitter</p>
                    </div>
              
            </div>
        </div>
        <?php
        require 'footer.php';?>
    </body>
</html>
<?php
unset($_SESSION['mess']);
?>