<link rel="stylesheet" href="css/styles.css" type="text/css">
<?php
include 'header3.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
    include 'connection.php';

    $sql = "SELECT * FROM items";
   $result = mysqli_query($con,$sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  

    <table cellpadding="9px">
        <thead>
        <th>Id</th>
        <th>name</th>
        <th>price</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
            
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>

                <td>
                 <a href='aedit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['id']; ?>'>Delete</a>


                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
 mysqli_close($con);
  ?>
</div>
</div>

</body>
</html>