
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
function delete(){
  global $con;

  $id = $_POST["action"];

  $query = "DELETE FROM services WHERE id = $id";
  mysqli_query($con, $query);
  echo "Deleted Successfullya";
}

?>