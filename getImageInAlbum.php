<?php 
$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM ImageGallary WHERE gallary_name = '$_POST[gallary_name]'";
$items = array();
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
	echo $row['image_name']." ".$row['comment'].",";
	// array_push($items, $row['tag_name']);
}
// $js_array = json_encode($items);
// echo $js_array;
mysqli_close($con);


?>

