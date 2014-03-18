<?php
	$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysqli_query($con,"DELETE FROM Tag WHERE name='$_POST[name]'");
	mysqli_close($con);
?>