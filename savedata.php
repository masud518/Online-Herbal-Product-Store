<?php
$name = $_POST['name'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $message = $_POST['message'];
$conn = mysqli_connect("localhost","root","","store") or die("Connection Failed");

$sql = "INSERT INTO contact(name,email,contact,message) VALUES ('{$name}','{$email}','{$contact}','{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/herbs/online herbal product/contact.php");

mysqli_close($conn);

?>