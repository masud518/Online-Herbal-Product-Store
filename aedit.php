<?php include 'header3.php'; ?>
<link rel="stylesheet" href="css/stylessssss.css" type="text/css">
<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'connection.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM items WHERE id = {$id}";
    $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
            <label for=""></label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
        </div>
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="text" name="price" value="<?php echo $row['price']; ?>" />
            </div>
            
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>