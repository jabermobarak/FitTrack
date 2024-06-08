<?php
include 'test.php';
if($con)
{
   $sql="DROP database FitTrack";
   $query=mysqli_query($con,$sql);
if($query)
{
   echo 'DBhas been dropped';
   mysqli_close($con);
}
else
die("unable to execute the query");
}
?>