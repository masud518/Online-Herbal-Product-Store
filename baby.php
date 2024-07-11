<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/#" />
        <title>Online Herbal products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>





        
            <marquee behavior="rotating" direction="right"scrollamount="5">
                <center>
                    <h3>100% natural products</h3>
                </center>
                 </marquee>
                
       <center>
            <div class="second">
                <h1>Baby Care</h1>
            </div>
       </center>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <div class="img">
                            <a href="cart.php">
                            <img src="img/babywash.jpg"
                                width="230" height="300" 
                                alt="baby wash"/>
                            </a>
                            </div>
                                <div class="caption">
                                <h3>Himalaya Gentle Baby Wash (200ml)</h3>
                                    <p>For a mild and gentle bath</p>
                                    <p>Price: Rs. 140.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(28)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=28" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/diaper.jpg" 
                                width="250" height="300"
                                alt="diaper rash cream"/>
                            </a>
                           
                                <div class="caption">
                                <h3>Himalaya Diaper Rash Cream,50g</h3>
                                    <p>Provides relief from the very first use</p>
                                    <p>Price: Rs. 120.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(29)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=29" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                         
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/lotion.jpg" 
                                width="250" height="300"
                                alt="Body Lotion"/>
                            </a>
                          
                                <div class="caption">
                                <h3>Himalaya Baby Body Lotion, For All Skin Types (400 ml)</h3>
                                    <p>Keeps skin naturally moisturized </p>
                                    <p>Price: Rs. 270.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(30)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=30" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                        </div>
                    </div>
                   
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/baby cream.jpg" 
                                width="230" height="300"
                                alt="Baby Cream"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Himalaya Baby Cream,For Dry Skin 200ml</h3>
                                    <p>keeps your baby's skin moisturized</p>
                                    <p>Price: Rs.220.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(31)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=31" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                          
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/shampoo.jpg" 
                                width="250" height="300"
                                alt=" Baby Shampoo"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Himalaya Gentle Baby Shampoo (100ml)</h3>
                                    <p>improves hair luster</p>
                                    <p>Price: Rs.80.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(32)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=32" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                          
                        </div>
                    </div>
                </div>
                          
       <center>
            <div class="second">
                <h1>Baby Care</h1>
            </div>
       </center>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/soap.jpg" 
                                width="250" height="300"
                                alt="baby soap"/>
                            </a>
                           
                                <div class="caption">
                                <h3>Himalaya Gentle Baby Soap Value Pack,4*75g</h3>
                                    <p>Ideal for daily use for normal skin</p>
                                    <p>Price: Rs.149.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(33)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=33" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                         
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/wipes.jpg" 
                                width="180" height="300"
                                alt="Baby Wipes"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Himalaya Baby Wipes-72 Pieces(Pack of 2)</h3>
                                    <p>Wipe with the power of herbs</p>
                                    <p>Price: Rs.285.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(34)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=34" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/gentel.jpg" 
                                width="250" height="300"
                                alt="Baby Wipes"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Himalaya Gentle Baby Wipes Mega Offer Pack</h3>
                                    <p>Wipe with the power of herbs</p>
                                    <p>Price: Rs.517.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(35)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=35" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/gift.jpg" 
                                width="250" height="300"
                                alt="Baby Gift Pack"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Himalaya Baby Gift Pack Series,Pack of 1 set,white</h3>
                                    <p>100 percent safe for newborns</p>
                                    <p>Price: Rs.501.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(36)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=36" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/jar.jpg" 
                                width="270" height="300"
                                alt="Baby jar pack"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Himalaya Baby Care Gift Jar Pack</h3>
                                    <p>100 percent safe for newborns</p>
                                    <p>Price: Rs.184.63</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(37)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=37" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            
                        </div>
                    </div>

                </div>
                           
       <center>
            <div class="second">
                <h1>Baby Care</h1>
            </div>
       </center>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/hair.jpg" 
                                width="230" height="300"
                                alt="  Baby Hair Oil"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Baby Hair Oil 200ml</h3>
                                    <p>formulated for babies and is designed to nourish scalp and hair.</p>
                                    <p>Price: Rs.220.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(38)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=38" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="img/pants.jpg" 
                                width="230" height="300"
                                alt="baby pants"/>
                            </a>
                           
                                <div class="caption">
                                <h3>Himalaya Total Care Baby Pants Diapers,Medium,78p</h3>
                                    <p>Soft easy-to-fit design offers care and comfort to your baby</p>
                                    <p>Price: Rs.918.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(39)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=39" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                          
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/diape.jpg"
                                width="250" height="300" 
                                alt="Baby Diaper pants"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Himalaya Baby Diaper pants,Small(4-8 kg),54p</h3>
                                    <p>Choosing the right diaper size based on baby weight is important.</p>
                                    <p>Price: Rs. 576.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(40)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=40" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/xl.jpg"
                                width="250" height="300" 
                                alt=" Baby Pants Diapers"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Total Care Baby Pants Diapers,XL(12-17 kg),74p</h3>
                                    <p>Choosing the right diaper size based on baby weight is important</p>
                                    <p>Price: Rs. 949.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(41)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=41" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/L.jpg" 
                                width="250" height="300" 
                                alt="Baby Pantsr"/>
                            </a>
                           
                                <div class="caption">
                                    <h3>Himalaya Baby Total Care Baby Pants Large (L)54s</h3>
                                    <p> Choosing the right diaper size based on baby weight is important</p>
                                    <p>Price: Rs. 731.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(42)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=42" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="#">Online Herbal products</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Masud Shaikh.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
