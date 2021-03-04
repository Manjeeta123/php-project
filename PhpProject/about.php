<?php require "include/common.php";
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
                
        
    </head>
    <body>
        <?php
        require 'header.php';?>
        <div class="container" style="margin-top: 7%;">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                
                <h2>WHO WE ARE</h2>
                <br>
                
                <div class="thumbnail" style="border-width: 0px;">
                    <img src="images/aboutpic.jpg" alt="about us">                    
            </div>
                <br>
                <P>
                    Fashion Vogue is an Indian electronic commerce company with headquarter in Delhi.It is one of
                    the largest Internet-based retailer in the India. Fashion Vogue started as a online blog, but 
                    soon diversified, selling purses . Fashion Vogue also cells products like school bags, collage bags,
                    traveling bags for men and women both. Fashion Vogue has separate retail websites for United States,
                    United Kingdom & Ireland, France,Canada, Germany ,
                    Italy, Spain, the Netherlands ,Australia, Brazil,Japan, China, Mexico. 
                </P>
            </div>
                <div class="col-sm-4 col-xs-12">
                    <h2>
                        OUR STORY
                    </h2>
                    <BR>
                  
                    <p>
                       The company was founded in 2003, spurred by what Sara Mehta called his "initiating framework"., which describd his efforts
                       as a initiate to participate in the Internet business boom during that time.In 2003, Sara left his
                       employment as president of Ofcol & co. and moved to seattle. She began to work on a business plan for
                       what would eventually become Fashion vogue.
                       <br>
                       <br>
                       Our home soil gave us the opportunity to seep in the roots of our business and prosper into the 
                       brand that we are today. We are proud of the creativity and aptitude our people possess;
                       the young talent of our country is unprecedented. By sticking to our roots, we not only
                       maintain the authenticity but provide homemade happiness.
                       <br>
                       <br>
                        By being a Made in India brand we acquire the distinct touch that allows us to stand out.
                        We believe in contributing to the constantly growing economy. Through local manufacturing 
                        and distributing internationally, we take an oath to accelerate India's growth story.


                    </p>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h2> OPPORTUNITIES</h2>
                    <BR>
                    <h3>Avaliable Roles</h3>
                    <p> 1. Jr./Sr. web Developer [full Time Role + also available as a 6 Months Internship] </p>
                    <p>2. Business Apprentice [6 Months Internship]</p>
                    <p> 3. Manager at backend operations[Full Time Role + alos available as a 6 Months internship]</p>
                </div>
        </div>
        </div>
        <?php 
        require 'footer.php';?>
        
    </body>
</html>

