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
            <div class="third">
                <h1>Cosmetics</h1>
            </div>
       </center>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <div class="img">
                            <a href="cart.php">
                            <img src="img/saundara.jpg"
                                width="230" height="300" 
                                alt="SAUNDARYA FACE WASH "/>
                            </a>
                            </div>
                                <div class="caption">
                                <h3>PATANJALI SAUNDARYA FACE WASH 60g</h3>
                                    <p> help to control acne & pimples.</p>
                                    <p>Price: Rs. 70.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(43)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=43" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/Moisturiser.jpg" 
                                width="250" height="300"
                                alt="Moisturizer Cream"/>
                            </a>
                           
                                <div class="caption">
                                <h3>Patanjali Ayurveda Moisturizer Cream</h3>
                                    <p>Makes the skin glowing and healthy</p>
                                    <p>Price: Rs. 75.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(44)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=44" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/nee.jpg" 
                                width="250" height="300"
                                alt="Himalaya Neem "/>
                            </a>
                          
                                <div class="caption">
                                <h3>Himalaya Neem Tablet</h3>
                                    <p>It helps to fight acne by inhibiting the bacteria that causes acne growth.</p>
                                    <p>Price: Rs. 180.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(45)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=45" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/antiii.jpg" 
                                width="230" height="300"
                                alt="Anti-Wrinkle Cream"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Anti-Wrinkle Cream 50g</h3>
                                    <p>Reduces wrinkles, fine lines and skin roughness.</p>
                                    <p>Price: Rs.270.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(46)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=46" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/alovera shampoo.jpg" 
                                width="250" height="300"
                                alt=" Aloe Vera shampoo"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Aloe Vera Shampoo 200ml</h3>
                                    <p>Help cleanses scalp without leaving it dry</p>
                                    <p>Price: Rs.110.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(47)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=47" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                          
                        </div>
                    </div>
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
                            <img src="img/roop.jpg" 
                                width="250" height="300"
                                alt="Roop Mantra Ayurvedic"/>
                            </a>
                           
                                <div class="caption">
                                <h3>Roop Mantra Ayurvedic Cream For Men And Women 60g</h3>
                                    <p>Good for daily use</p>
                                    <p>Price: Rs.146.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(48)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=48" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/mantra.jpg" 
                                width="180" height="300"
                                alt="Roop Mantra"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Roop Mantra Cucumber Herbal Face Wash,115ml (Pack of 2)</h3>
                                    <p>Good for daily use</p>
                                    <p>Price: Rs.196.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(49)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=49" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/beauty.jpg" 
                                width="250" height="300"
                                alt="BEAUTY CREAM"/>
                            </a>
                            
                                <div class="caption">
                                <h3>PATANJALI BEAUTY CREAM 50g</h3>
                                    <p>It makes skin soft and smooth, deeply moisturized </p>
                                    <p>Price: Rs.70.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(50)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=50" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/anti.jpg" 
                                width="250" height="300"
                                alt="PATANJALI ANTI WRINKLE"/>
                            </a>
                            
                                <div class="caption">
                                <h3>PATANJALI ANTI WRINKLE CREAM 50g</h3>
                                    <p>Anti Wrinkle Herbal Cream is helpful in repairing age damage to skin</p>
                                    <p>Price: Rs.150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(51)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=51" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/shaving.jpg" 
                                width="270" height="300"
                                alt="Herbal Shaving Cream"/>
                            </a>
                            
                                <div class="caption">
                                <h3>Patanjali Herbal Shaving Cream 100 g</h3>
                                    <p>To make complexion fresh, smooth and beautiful</p>
                                    <p>Price: Rs.60.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(52)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=52" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            
                        </div>
                    </div>

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
                            <img src="img/bread.jpg" 
                                width="230" height="300"
                                alt="  MEN'S BEARD facewash"/>
                            </a>
                            
                                <div class="caption">
                                <h3>MEN'S BEARD ENTICE FACE WASH 100g</h3>
                                    <p>keep beard conditioned,itch free with smooth,refreshed skin  and provide entice look .</p>
                                    <p>Price: Rs.220.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(53)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=53" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/fair.jpg" 
                                width="230" height="300"
                                alt="Glow & Lovely Natural Face Cream "/>
                            </a>
                           
                                <div class="caption">
                                <h3>Natural Face Cream Ayurvedic Care+,50g</h3>
                                    <p>This is not just a cream,it is an Ayurvedic glow expert.safe to use daily</p>
                                    <p>Price: Rs.154.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(54)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=54" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/kesarr.jpg"
                                width="250" height="300" 
                                alt="Kesar Chandan"/>
                            </a>
                            
                                <div class="caption">
                                    <h3>PATANJALI Aloe vera Gel Kesar Chandan 150ml</h3>
                                    <p>Lightens dark spots and pigmentation.Makes skin glow.Controls sunburn</p>
                                    <p>Price: Rs. 110.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(55)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=55" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/refreshing.jpg"
                                width="250" height="300" 
                                alt=" BODY LOTION "/>
                            </a>
                            
                                <div class="caption">
                                    <h3>ALOE & CUCUM.REF.BODY LOTION 200ml INDIA</h3>
                                    <p>Pleasant fragrance.Gets absorbed quickly. formulated to help soften and smoothen your skin</p>
                                    <p>Price: Rs. 149.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(56)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=56" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/coco.jpg" 
                                width="250" height="300" 
                                alt="Himalaya Cocoa Butter "/>
                            </a>
                           
                                <div class="caption">
                                    <h3>Himalaya Cocoa Butter Intensive Body Lotion, 200 ml</h3>
                                    <p> Helps deeply nourish, moisturize, and repair dry skin. formulated to help soften and smoothen your skin</p>
                                    <p>Price: Rs. 145.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(57)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=57" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
