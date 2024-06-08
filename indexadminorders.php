<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="indexadmin.css">
  </head>
  <body>
    <h1>USERS</h1>
    <div class="table">
    <table border = 1 style="background-color:whitesmoke;">
      <tr style="background-color: rgb(220, 220, 220);">
        <td style="border: none;color: rgb(130, 130, 130)">#</td>
        <td style="border: none;color: rgb(130, 130, 130)">Product Name</td>
        <td style="border: none;color: rgb(130, 130, 130)">Quantity</td>
        <td style="border: none;color: rgb(130, 130, 130)">Total price</td>
        <td style="border: none;color: rgb(130, 130, 130)">Date of order</td>
        <td style="border: none;color: rgb(130, 130, 130)">email</td>
        <td style="border: none;color: rgb(130, 130, 130)">username</td>
      
        
      </tr>
    
      <?php
      require 'config.php';
      $rows = mysqli_query($con, "SELECT * FROM orders");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
     
        <td><?php echo $i++; ?></td>
        <td style=""><?php echo $row["product_name"]; ?></td>
        <td><?php echo $row["quantity"]; ?></td>
        <td><?php echo $row["total_price"]; ?></td>
        <td><?php echo $row["order_date"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td style="border: none;">
       
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <div class="adduser">
   
    <a href="adminpage.php" style="color: rgb(130, 130, 130);margin-left: 45%">Go To admin panel</a><br><br>
    </div>
   

    
    
    <?php require 'scriptadminorders.php'; ?>
  </div>
  </body>
</html>