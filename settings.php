<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Online herbal product Store</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
    <link rel="stylesheet" href="css/stylesssss.css" type="text/css">
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
<div style="padding-left:340px;">             
    <div class="square">     
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1 class="Sign">Change Password</h1>
                        <form method="post" action="setting_script.php">
                            <div class="column">
                                <input type="password" class="column" name="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="column">
                                <input type="password" class="column" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="column">
                                <input type="password" class="column" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="column">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
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
