<?php
include 'test.php';
if($con)
{
   $sql="CREATE database FitTrack";
   $query=mysqli_query($con,$sql);
if($query)
{
   echo 'DBhas been created';
   mysqli_close($con);
}
else
die("unable to execute the query");
}
?>