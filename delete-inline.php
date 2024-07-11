<?php

$id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM users_items WHERE id = {$id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/herbs/admin.php");

mysqli_close($con);

?>
