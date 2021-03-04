<?php
include 'login.php';
?>
  <div class="navbar navbar-default  navbar-fixed-top  " >
            <div class="container">
                <div class="navbar-header">
                   
            <a href="index.php" class="navbar-brand " >
                Fashion Vogue</a>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span style="color:#FFFFFF" class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            </div>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class=" nav navbar-nav navbar-right ">
                  <?php 
                      if(isset($_SESSION["email"])){
                              ?>  
                  <li> <a href="cart.php"   ><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li>
                    <a  href="setting.php"  > <span class="glyphicon glyphicon-user"></span> Setting</a>
                </li>
                 <li>
                     <a href="logout_script.php" > <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                      <?php } else{ ?>
               
                <li> <a href="signup.php"   ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li>
                    <a  href="#mymodal"  data-toggle="modal"> <span class="glyphicon glyphicon-log-in "></span> login</a>
                </li>
                 <li>
                    <a href="about.php" > <span class="glyphicon glyphicon-list"></span> About US</a></li>
                  <li>
                    <a href="contact.php" > <span class="glyphicon glyphicon-phone "></span> Contact</a></li>
                 <?php  } ?>
            </ul>  
            
            </div>
            </div>
            </div>

  
       
               

