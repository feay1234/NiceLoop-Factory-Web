<?php 
$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT name, tag_name FROM Tag LEFT JOIN ImageTag ON name = tag_name AND image_name = '$_POST[name]'";
$items = array();
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
	echo $row['name']." ".$row['tag_name'].",";
	// array_push($items, $row['tag_name']);
}
// $js_array = json_encode($items);
// echo $js_array;
mysqli_close($con);


?>

