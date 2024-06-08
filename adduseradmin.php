<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
    <link rel="stylesheet" href="adduseradmin.css">
  </head>
  <body>
    <h1>Add User</h1>
    
    <form autocomplete="off" action="" method="post">
    <div class = "inputs">
      <input type="text" id="fullname" name="fullname" value="" placeholder = "Full Name"> <br>
      <input type="email" id="email" name="email" value="" placeholder = "Email"> <br>
      <input type="text" id="username" name="username" value="" placeholder = "User name"><br>
      <input type="password" id="password" name="password" value="" placeholder = "Password"><br>
      <input type="text" id="admin" placeholder = "Admin" name="admin" value="">
      <button type="button" onclick="submitData('insert')">Add</button>
    </form>
    
   
    <a href="indexadmin.php" style="color: rgb(130, 130, 130)">Go To table of users</a>
    </div>
    <?php require 'scriptadmin.php'; ?>
  </body>
</html>