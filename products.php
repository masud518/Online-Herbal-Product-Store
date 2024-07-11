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
                    <h1>Welcome To our website</h1>
                    <h3>100% natural products</h3>
                </center>
                 </marquee>
                
       <center>
            <div class="first">
                <h1>Ayurvedic products</h1>
            </div>
       </center>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <div class="img">
                            <a href="cart.php">
                                <img src="img/baidyanath-chyawanprash.jpg"
                                width="250" height="300" 
                                alt="Chyawanprash"/>
                            </a>
                            </div>
                                <div class="caption">
                                    <h3>Baidyanath Chyawanprash 1kg</h3>
                                    <p>Sakti se Bharpur keep Family fit and Fresh</p>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/giloyy.jpg" 
                                width="250" height="300"
                                alt="Giloy Juice"/>
                            </a>
                           
                                <div class="caption">
                                    <h3>Baidyanath Giloy Juice 1litre</h3>
                                    <p>This products works as Immunity Booster </p>
                                    <p>Price: Rs. 280.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/paste.jpg" 
                                width="250" height="300"
                                alt="Natural paste"/>
                            </a>
                          
                                <div class="caption">
                                    <h3>Patanjali Natural Toothpaste 100g</h3>
                                    <p>Natural Toothpaste keeps Teeth strong and fresh breath</p>
                                    <p>Price: Rs.55.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/oil.jpeg" 
                                width="250" height="300"
                                alt="Indulekha  hair oil"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Indulekha Hair oil 100ml</h3>
                                    <p>Reduce hair fall </p>
                                    <p>Price: Rs. 410.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                          
                        </div>
                    </div>

                </div>
                <div style="padding-left:1050px;">  
                <div class="panel">To buy more products <a href="product.php">click</a></div>
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
                                <img src="img/kit.jpg"
                                width="270" height="300"
                                alt="Baby kit"/>
                            </a>
                           
                                <div class="caption">
                                    <h3>Himalaya Baby kit </h3>
                                    <p>Himalaya Best selling product</p>
                                    <p>Price: Rs. 210.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/powder.jpeg" 
                                width="270" height="300"
                                alt="himalaya powder"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Himalaya Baby powder 100gm</h3>
                                    <p>keeps skin soft and Natural </p>
                                    <p>Price: Rs. 195.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/soapp.jpeg" 
                                width="270" height="300"
                                alt="Baby soap"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Himalaya Baby soap 75gm</h3>
                                    <p>Baby soap keeps skin safe and natural</p>
                                    <p>Price: Rs. 80.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/baby oil.jpg"
                                width="280" height="300"
                                alt="message oil"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Himalaya Baby message oil </h3>
                                    <p>message oil helps to relax and calm & soothe Baby </p>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            
                        </div>
                    </div>
                </div>

                <div style="padding-left:1050px;">  
                <div class="panel">To buy more products <a href="baby.php">click</a></div>
                </div>
                <center>
            <div class="third">
                <h1>Cosmetics</h1>
            </div>
       </center>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/creamm.jpg" 
                                width="250" height="300" 
                                alt="Alovera cream"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Alovera Moisturizing cream 50gm</h3>
                                    <p>Best for all skin</p>
                                    <p>Price: Rs. 85.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/gell.jpg"
                                width="250" height="300" 
                                alt="Alovera gel"/>
                            </a>
                           
                                <div class="caption">
                                    <h3>Alovera gel 150ml</h3>
                                    <p>Alovera gel for all skin</p>
                                    <p>Price: Rs. 45.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/he.jpg"
                                width="250" height="300" 
                                alt="himalaya cream"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>Himalaya Natural Glow Kesar face cream</h3>
                                    <p>For daily use makes skin glow</p>
                                    <p>Price: Rs. 80.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/himalaya.jpg" 
                                width="250" height="300" 
                                alt="Neem Facewash"/>
                            </a>
                           
                                <div class="caption">
                                    <h3>Himalya Neem face wash</h3>
                                    <p>free from pimple and best for daily use</p>
                                    <p>Price: Rs. 75.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                        </div>
                    </div>
                    
                </div>
                <div style="padding-left:1050px;">  
                <div class="panel">To buy more products <a href="cosmetic.php">click</a></div>
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
