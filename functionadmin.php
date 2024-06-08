<?php
require 'config.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}

function insert(){
  global $con;
  define('SALT', 'd#f453dd');

  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $encpass = md5(SALT . $password);
  $admin = $_POST["admin"];

  if (empty($fullname) || empty($email) || empty($username) || empty($password) || empty($admin)) {
    echo '<script type="text/javascript">alert("Please fill in all fields")</script>';
  } else {
    $query = "INSERT INTO signupp (fullname, email, username, pass, adminn) VALUES ('$fullname', '$email', '$username', '$encpass', '$admin')";
    mysqli_query($con, $query);
    echo "Inserted Successfully";
  }
}

function edit(){
  global $con;
  define('SALT', 'd#f453dd');

  $id = $_POST["id"];
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $encpass = md5(SALT . $password);
  $admin = $_POST["admin"];

  $query = "UPDATE signupp SET fullname = '$fullname', email = '$email', username = '$username', adminn = '$admin', pass = '$encpass' WHERE id = $id";
  mysqli_query($con, $query);
  echo "Updated Successfully";
}

function delete(){
  global $con;

  $id = $_POST["action"];

  $query = "DELETE FROM signupp WHERE id = $id";
  mysqli_query($con, $query);
  echo "Deleted Successfully";
}
?>
