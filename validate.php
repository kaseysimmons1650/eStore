<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/~ksimmon1/CSS/project1.css">
<body>
	<?php

	$fName = $_GET['first'];
	$lName = $_GET['last'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$subject = "Thank you for your feedback!";
	$message = "Dear " . $fName .", Thank you for submitting your feedback on our website. A member from our team will get back to you as soon as possible.";

	if (!preg_match("/^[a-zA-Z-' ]*$/",$fName)) {
		$error = true;
  		$fNameErr = "Invalid first name.";
  		echo $nameErr;
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