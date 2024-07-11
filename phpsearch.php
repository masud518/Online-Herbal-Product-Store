<?php
include 'product.php';
?>
<?php

$search = $_POST['search'];

$conn = mysqli_connect("localhost","root","","store") or die("Connection Failed");



$sql = "select * from items where name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["name"]."  ".$row["price"]." <br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>