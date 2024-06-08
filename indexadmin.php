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
        <td style="border: none;color: rgb(130, 130, 130)">Name</td>
        <td style="border: none;color: rgb(130, 130, 130)">Email</td>
        <td style="border: none;color: rgb(130, 130, 130)">User-Name</td>
        <td style="border: none;color: rgb(130, 130, 130)">password</td>
        <td style="border: none;color: rgb(130, 130, 130)">Action</td>
        <td style="border: none;color: rgb(130, 130, 130);width:15%;">Admin</td>
      </tr>
    
      <?php
      require 'config.php';
      $rows = mysqli_query($con, "SELECT * FROM signupp");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td style=""><?php echo $row["fullname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["pass"]; ?></td>
        <td><?php echo $row["adminn"]; ?></td>
        <td style="border: none;">
          <button style="padding:4%;width: 35%;background-color: rgb(203, 203, 203);border: none;"><a style="text-decoration: none;color: #298b9b;" href="edituseradmin.php?id=<?php echo $row['id']; ?>">Edit</a></button>
          <button style="padding:4%;width: 35%;background-color:  rgb(203, 203, 203);border: none;" type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <div class="adduser">
    <button style="padding:1%;width:6.5%;font-weight: bold;margin-left: 44%;background-color:#298b9b;border: none;"><a href="adduseradmin.php" style="text-decoration: none;color:whitesmoke ">Add User</a></button>
    <a href="adminpage.php" style="color: rgb(130, 130, 130)">Go To admin panel</a>
    </div>
   

    
    
    <?php require 'scriptadmin.php'; ?>
  </div>
  </body>
</html>