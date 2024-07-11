<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/#" />
        <title>online herbal product store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
      
        <link rel="stylesheet" href="css/style.css" type="text/css">

    </head>
    <body>
    <link rel="stylesheet" href="css/style.css" type="text/css">
        <div>
           <?php
            require 'header.php';
           ?>
            
            <link rel="stylesheet" href="css/stylessss.css" type="text/css">
           <!-- Define the slideshow container -->
    <div id="slideshow">
        <div class="slide-wrapper">
             
        <!-- Define each of the slides
         and write the content -->
          
            <div class="slide">
            <a href="product.php">
                <h1 class="slide-number">
                    KEEPING MANKIND HAPPY
                </h1>
                
             </a>
            </div>
            <div class="slide">
            <a href="product.php">
                <h1 class="slide-number">
                    BOOST YOUR IMMUNITY
                </h1>
            </a>  
            </div>
            <div class="slide">
            <a href="baby.php">
                <h1 class="slide-number">
                    KEEP BABY HEALTHY AND SAFE
                </h1>
            </a>  
            </div>
            <div class="slide">
            <a href="cosmetic.php">
                <h1 class="slide-number">
                 TREAT YOUR SKIN BETTER 
                </h1>
            </a>    
            </div>
        </div>
    </div>      






        <!--<div class="slider_image">
            <div class="main_image">
               <img src="img/pi.jpg">
            </div>
        </div>--->
 
           
          <!-- <div id="bannerImage">
               <div class="container">
                   
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>-->
          


          
        <!--start categories section-->
         <div class="categories_pic">
            <div class="categories_wrapper">
                <div class="categories-heading">
                    <span><i class="fas fa-angle-double-down"></i></span><h2> CATEGORIES </h2>
                </div>
                <div class="pics">
                    <div class="first">
                        <a href="product.php">
                         <img src="img/all-removebg-preview.jpg">
                            <span> Ayurvedic products </span>
                        </a>
                    </div>
                    <div class="second">
                        <a href="baby.php">
                            <img src="img/happy-smiling.jpg">
                            <span> Baby Care </span>
                        </a>
                        <a>
                        </a>
                    </div>
                    <div class="third">
                        <a href="cosmetic.php">
                            <img src="img/ayurveda_about.jpg">
                            <span> Cosmetics </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!- end categories section-->
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="#">Online Herbal products</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by  Masud Shaikh.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>