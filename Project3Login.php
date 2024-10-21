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
	//echo "Connected successfully <br>";

	$login = $_GET['login'];
	$password = $_GET['password'];

	$check_login = mysqli_query($conn, "SELECT login FROM ksimmon1_registration where login = '$login' ");

	$check_pass = mysqli_query($conn, "SELECT password FROM ksimmon1_registration where password = '$password' ");
	
	if(mysqli_num_rows($check_pass) > 0 and mysqli_num_rows($check_login) > 0){
		echo('Successful login!<br>');
	}
	else if(mysqli_num_rows($check_pass) > 0 and mysqli_num_rows($check_login) <= 0){
		echo('Incorrect username.<br>');
	}
	else if(mysqli_num_rows($check_pass) <= 0 and mysqli_num_rows($check_login) > 0){
		echo('Incorrect password.<br>');
	}
	else if(mysqli_num_rows($check_pass) <= 0 and mysqli_num_rows($check_login) <= 0){
		echo('Incorrect username and password.<br>');
	}


$conn->close();
	?>

</body>
</head>
</html>