<DOCTYPE html>
<html lang="en">
<head>
<title>whatever</title>
</head>
<body>
<h1>
Welcome to PHP test
</h1>
<?php
$servername = "avl.cs.unca.edu";
$username = "frashid";
$password = "password";
$dbname = "csci344spr22";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<h2> date ".date("l, F jS").".<br>\r\n";
echo "<h2> time ".date("g:ia").".<br>\r\n";
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
 echo "Table MyGuests created successfully. <br>";
} else {
 echo "Error creating table: " . $conn->error. "<br>";
}
//INSERT
$sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($conn->query($sql2) === TRUE) {
 echo "New record created successfully <br>";
} else {
 echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
}
//SELECT
$sql3 = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " .
$row["lastname"]. "<br>";
 }
} else {
 echo "0 results <br>";
}
$conn->close();
?>
<h2>php shesh</h2>
</body>
</html>