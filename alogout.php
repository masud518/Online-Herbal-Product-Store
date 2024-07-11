<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>online herbal product</title>
       
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                            <div style="padding-left:230px;">
                               <img src="img/see.jpeg" width="800" height="440" >
                            </div> 
                                <p style="padding-left:450px; text-transform: uppercase; color:red ">You have been logged out. <a href="alogin.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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