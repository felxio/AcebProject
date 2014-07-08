<?php
$con=mysqli_connect("localhost","acebadmin","passworld","acebdatabase");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


// get from database
// $q = "SELECT * FROM Persons";
// $result = mysqli_query($con,$q);

// while($row = mysqli_fetch_array($result)) {
// 	echo $row['firstname'];
// 	echo "<br>";
// }



// save into a database
// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
// if ($firstname != "" || $firstname==null) {
	$sql="INSERT INTO Persons (FirstName) 	VALUES ('$firstname')";
	
	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	echo "1 record added";
// }


mysqli_close($con);
?>