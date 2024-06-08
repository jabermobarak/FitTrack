<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="edituseradmin.css">
  </head>
  <body>
    <h1>Edit User Info</h1>
    <form autocomplete="off" action="" method="post">
      <?php
      require 'config.php';
      $id = $_GET["id"];
      $rows = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM signupp WHERE id = $id"));
      ?>
      <div class="inputs">
      <input type="hidden" id="id"  value="<?php echo $rows['id']; ?>">
      <input type="text" id="fullname" placeholder="Full Name" value="<?php echo $rows['fullname']; ?>"> <br>
      <input type="text" id="email" placeholder="Email" value="<?php echo $rows['email']; ?>"> <br>
      <input type="text" id="username" placeholder="User Name" value="<?php echo $rows['username']; ?>"> <br>
      <input type="text" id="password" placeholder="Password" name="password" value="<?php echo $rows['pass']; ?>"> <br>
      <input type="text" id="admin" placeholder="admin" name="admin" value="<?php echo $rows['adminn']; ?>"> <br>
      
       
      <button type="button" onclick="submitData('edit');">Edit</button>
   
    </form>
    
    <a href="indexadmin.php" style="color: rgb(130, 130, 130)">Go To Users Page</a>
  </div>
    <?php require 'scriptadmin.php'; ?>
  </body>
</html>