<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/~ksimmon1/CSS/project1.css">
<body>
	<?php

	$servername = "avl.cs.unca.edu";
	$username = "ksimmon1";
	$password = "EnigmaticCaloric";
	$dbname = "csci344fal22";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully <br>";

	$sql2 = "INSERT INTO ksimmon1_exam3_Students
	VALUES ('1005', 'Bond', 'James', 'Senior')";
	if ($conn->query($sql2) === TRUE) {
		echo "New record created successfully <br>";
	} 
	else {
		echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
	}

	$sql3= "INSERT INTO ksimmon1_exam3_Students
	VALUES ('1006', 'Bond', 'James', 'Junior')";
	if ($conn->query($sql3) === TRUE) {
		echo "New record created successfully <br>";
	} 
	else {
		echo "Error: " . $sql3 . "<br>" . $conn->error. "<br>";
	}

	$sql4 = "SELECT * FROM ksimmon1_exam3_Students";
	$result = $conn->query($sql4);
	if ($result->num_rows > 0) {
 	while($row = $result->fetch_assoc()) {
 	echo "StudentID: " . $row["StudentID"].  "&emsp;Last Name: " . $row["LastName"] . "&emsp;First Name: " . $row["FirstName"] . "&emsp;Level: " . $row["Level"]."<br>";
	 	}
	} 
	else {
		echo "0 results <br>";
		}


$conn->close();
	?>

</body>
</head>
</html>