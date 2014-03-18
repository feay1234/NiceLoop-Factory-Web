<?php 
$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="DELETE FROM Image WHERE name = '$_POST[name]'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

$sql="DELETE FROM ImageTag WHERE image_name = '$_POST[name]'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


mysqli_query($con,"UPDATE Gallary SET image_num = image_num-1 WHERE name IN (SELECT gallary_name FROM ImageGallary WHERE image_name = '$_POST[name]') ");

$sql="DELETE FROM ImageGallary WHERE image_name = '$_POST[name]'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);


?>