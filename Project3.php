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

	//$sql = "CREATE TABLE ksimmon1_registration (
	  //  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  //firstName VARCHAR(30),
	  //  lastName VARCHAR(30),
	  //  email VARCHAR(40),
	  //  phone INT(10),
	    //login VARCHAR(30),
	    //password VARCHAR(30)
	//)";

	//if ($conn->query($sql) === TRUE) {
	//	echo "Table created successfully. <br>";
	//} 
//	else {
//		echo "Error creating table: " . $conn->error. "<br>";
//	}

	$fName = $_GET['first'];
	$lName = $_GET['last'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$login = $_GET['login'];
	$password = $_GET['password'];
	$error = false;

	if (!preg_match("/^[a-zA-Z-' ]*$/",$fName)) {
		$error = true;
  		echo "Invalid first name.<br>";
  	}
  	if (!preg_match("/^[a-zA-Z-' ]*$/",$lName)) {
  		$error = true;
  		echo "Invalid last name.<br>";
  	}
  	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$error = true;
  		echo "Invalid email format.<br>";
  	}
  	if(!preg_match('/^[0-9]{10}+$/', $phone)) {
  		$error = true;
		echo "Invalid phone number<br>";
	}
	$check_email = mysqli_query($conn, "SELECT email FROM ksimmon1_registration where email = '$email' ");
	
	if(mysqli_num_rows($check_email) > 0){
		$error = true;
		echo('Email already exists<br>');
	}

	$check_login = mysqli_query($conn, "SELECT login FROM ksimmon1_registration where login = '$login' ");

	if(mysqli_num_rows($check_login) > 0){
		$error = true;
		echo('Username already exists');
	}

	if($error == false){
		$sql2 = "INSERT INTO ksimmon1_registration (firstName, lastName, email, phone, login, password)
		VALUES ('$fName', '$lName', '$email', '$phone', '$login', '$password')";
		if ($conn->query($sql2) === TRUE) {
			echo "Registration successful. <br>";
		} 
		else {
			echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
		}
	}

	$sql4 = "SELECT firstName, lastName, email, phone, login, password FROM ksimmon1_registration";
	$result = $conn->query($sql4);
	if ($result->num_rows > 0) {
 	while($row = $result->fetch_assoc()) {
 	echo "First Name: " . $row["firstName"].  "&emsp;Last Name: " . $row["lastName"] . "&emsp;Email: " . $row["email"] . "&emsp;Phone: " . $row["phone"]. "&emsp;Login: ". $row["login"]. "&emsp;Password: ". $row["password"]."<br>";
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