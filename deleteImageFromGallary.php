<?php 
$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="DELETE FROM ImageGallary WHERE gallary_name ='$_POST[gallary_name]' AND image_name = '$_POST[image_name]'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record deleted";
mysqli_query($con,"UPDATE Gallary SET image_num = image_num-1 WHERE name = '$_POST[gallary_name]'");
mysqli_close($con);


?>