<?php 
$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Tag (name)
VALUES
('$_POST[name]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);


?>