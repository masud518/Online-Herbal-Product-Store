<!--<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">worlds</a>
                   </div>-->
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                            <div class="icon">
                           <a href="cart.php"><span class=""></span> Cart</a>
                           <a href="logout.php"><span class=""></span> Logout</a>
                           <a href="settings.php"><span class=""></span> Settings</a>

                           </div>
                           
                          
                           <?php
                           }else{
                            ?>
                            <div class="icon">
                            <a href="signup.php"id="icon1-a"><span class=""></span> Sign Up</a>
                           <a href="login.php"id="icon2-a"><span class=""></span> Login</a></li>
                           <a href="alogin.php"id="icon3-a"><span class=""></span> Admin Login</a></li>
                            </div>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>



 <!--header section ======-->
 <header>
            <div class="header_wrapper">
                <div class="logo_icon_wrapper">
                    <div class="logo">
                    <img src="img/herb.jpg">
                  </div>
                 <!-- <div class="icon">
                    <a href="" id="icon1-a"><i class="fas fa-shopping-cart"></i><span>Cart</span></a>
					<a href="" id="icon2-a"><i class="fas fa-user"></i><span>Guest</span></a>
                  </div>-->
                  </div>
                  <div class="nav_search_wrapper">
                      <div class="navigation">
                          <ul>
                              <li><a href="index.php">Home</a></li>
                             <!-- <li><a href='products.php'>categories</a></li>-->
                             
                              <li><a href="products.php">product</a></li>
                              <li><a href="about.php">About Us</a></li>
                               <li><a href="contact.php">contact us</a></li>
                    
                          </ul>
        </div>
                          <div class="search-btn">
                              <form action="phpsearch.php" method="post">
                            <input type="text" name="search" placeholder="search something here">
                            <input type ="submit" >
                              </form>
                              <a href="#"><i class="fas fa-search"></i></a>
                          </div>
                        </div>
                  </div>
                </div>
        </header>
        <!-- end of header section -->