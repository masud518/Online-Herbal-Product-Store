<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>online herbal product</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
    <link rel="stylesheet" href="css/styless.css" type="text/css">
    
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
     <div style="padding-left:370px;">       
            <div class="box">
                <img src="newuser.jpg" width="100px" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                      
                        <h1 class="Sign"> <b>New User</b></h1>
                        <form method="post" action="user_registration_script.php">
                        <div class="border">
                            <div class="column">
                                <input type="text" class="column" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="column">
                                <input type="email" class="column" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="column">
                                <input type="password" class="column" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="column"> 
                                <input type="tel" class="column" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="column">
                                <input type="text" class="column" name="city" placeholder="City" required="true">
                            </div>
                            <div class="column">
                                <input type="text" class="column" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="column">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
     </div>      
            <br><br><br><br><br><br>
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
