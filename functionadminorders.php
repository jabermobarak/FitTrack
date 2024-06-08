<?php
require 'config.php';

if(isset($_POST["action"])){
  
    delete();
  
}




function delete(){
  global $con;

  $id = $_POST["action"];

  $query = "DELETE FROM orders WHERE id = $id";
  mysqli_query($con, $query);
  echo "Deleted Successfully";
}


