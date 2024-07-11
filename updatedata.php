<?php
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];


include 'connection.php';

$sql = "UPDATE items SET  name = '{$name}',price = '{$price}' WHERE id = {$id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/herbs/online%20herbal%20product/padmin.php");

mysqli_close($con);

?>