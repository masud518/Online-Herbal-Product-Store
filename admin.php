<link rel="stylesheet" href="css/styles.css" type="text/css">
<?php
include 'header3.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
    include 'connection.php';

    $sql = "SELECT * FROM users_items";
   $result = mysqli_query($con,$sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  

    <table cellpadding="9px">
        <thead>
        <th>Id</th>
        <th>user_id</th>
        <th>item_id</th>
        <th>status</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
            
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['item_id']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                 <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>delete</a>


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
