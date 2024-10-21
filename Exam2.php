<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/~ksimmon1/CSS/project1.css">
<body>
	<?php

	$fName = $_GET['first'];
	$lName = $_GET['last'];
	$email = $_GET['email'];
	$feedback = $_GET['feedback'];
	$subject = "Thank you for your feedback!";
	$message = "Dear " . $fName .", Thank you for submitting your thoughts and ideas about the weather. Your feedback is as follows: " . $feedback;

	if (!preg_match("/^[a-zA-Z-' ]*$/",$fName)) {
		$error = true;
  		$fNameErr = "Invalid first name.";
  		echo $fNameErr;
  	}
  	if (!preg_match("/^[a-zA-Z-' ]*$/",$lName)) {
		$error = true;
  		$lNameErr = "Invalid last name.";
  		echo $lNameErr;
  	}
  	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$error = true;
  		$emailErr = "Invalid email format.";
  		echo $emailErr;
  	}
  	else{
  		echo "Success. Thank you for submitting. An email has been sent to the provided email address.";
  	}

 	mail($email, $subject, $message);

	?>

</body>
</head>
</html>