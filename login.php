<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>online herbal product Store</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
    <link rel="stylesheet" href="css/stylesssss.css" type="text/css">
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
<div style="padding-left:340px;">           
    <div class="box">    
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="Sign">LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p class="sig">Login to make a purchase.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="column">
                                        <input type="email" class="column" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="column">
                                        <input type="password" class="column" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="column">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
    </div>   
</div>    
           <br><br><br><br><br>
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
