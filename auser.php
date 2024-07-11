<link rel="stylesheet" href="css/styles.css" type="text/css">
<?php
include 'header3.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
    include 'connection.php';

    $sql = "SELECT * FROM users";
   $result = mysqli_query($con,$sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  

    <table cellpadding="9px">
        <thead>
        <th>Id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>contact</th>
        <th>city</th>
        <th>address</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
            
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['address']; ?></td>



                <td>
                 <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                   <!-- <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>-->


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