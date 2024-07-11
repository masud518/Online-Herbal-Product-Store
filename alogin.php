<?php 
include('connection.php');
error_reporting(0);
$user = $_POST['user'];
$pass = $_POST['pass'];
$query ="SELECT * FROM login WHERE username = '$user' and password = '$pass'";  
$result =mysqli_query($con,$query);
if(mysqli_num_rows($result)) {
    //session_start();
    header('location:admin.php');
}else{
    echo" ";

}
?>
<html>  
<head>  
    <title>Admin Login</title>    
    <link rel = "stylesheet" type = "text/css" href = "./css/styles.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Admin Login</h1>  
        <form name="f1" action = "#"  method = "POST">  
            <p>  
                <label> Admin Email:</label>  
                <input type = "text" id ="user" name  = "user" required/>  
            </p>  
            <p>  
                <label> Password:..... </label>  
                <input type = "password" id ="pass" name  = "pass" required/>  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
                <div class="panel-footer">Not a Admin? <a href="index.php">Back To Home</a></div>   
        </form>  
    </div>
    
</body>     
</html>  