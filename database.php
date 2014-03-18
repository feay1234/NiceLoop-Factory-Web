<?php
	// Create connection
	$con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }


// 	mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
// VALUES ('Peter', 'Griffin',35)");

// mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age) 
// VALUES ('Glenn', 'Quagmire',33)");
// 	echo "success";


	$result = mysqli_query($con,"SELECT * FROM Persons");
echo "Comment & file directory";
  echo "<br>";
while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . "          " . $row['LastName'];
  echo "<br>";
  }
mysqli_close($con);
?>