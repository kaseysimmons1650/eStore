<!DOCTYPE html>
<html lang="en">
<head>
<title>Assignment 7</title>
</head>
<body>
<h1>
Movie Database After Release Year < 1980 Removed:
</h1>
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

//$sql = "CREATE TABLE ksimmon1_movies (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    movieName VARCHAR(50),
//    language VARCHAR(30),
//    genre VARCHAR(40),
//    releaseYear INT(4)
//)";

//echo "<h2> date ".date("l, F jS").".<br>\r\n";
//echo "<h2> time ".date("g:ia").".<br>\r\n";

//if ($conn->query($sql) === TRUE) {
 //echo "Table ksimmon1_movies created successfully. <br>";
//} 
//else {
// echo "Error creating table: " . $conn->error. "<br>";
//}


//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Toy Story', 'English', 'Animated', '1995')";
//if ($conn->query($sql2) === TRUE) {
//echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Spirited Away', 'Japanese', 'Animated', '2001')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('The Wizard of Oz', 'English', 'Musical', '1939')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Dont Worry Darling', 'English', 'Thriller', '2020')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Jaws', 'English', 'Adventure', '1975')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Parasite', 'Korean', 'Thriller', '2019')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Roma', 'Spanish', 'Drama', '2018')";
//if ($conn->query($sql2) === TRUE) {
 //echo "New record created successfully <br>";
//} 
//else {
 //echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('My Policeman', 'English', 'Romance', '2022')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Dunkirk', 'English', 'Action', '2017')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

//$sql2 = "INSERT INTO ksimmon1_movies (movieName, language, genre, releaseYear)
//VALUES ('Monty Pyhton and the Holy Grail', 'English', 'Comedy', '1975')";
//if ($conn->query($sql2) === TRUE) {
// echo "New record created successfully <br>";
//} 
//else {
// echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
//}

$sql3 = "SELECT movieName, language, genre, releaseYear FROM ksimmon1_movies";
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo "Movie Name: " . $row["movieName"].  "&emsp;Language: " . $row["language"] . "&emsp;Genre: " . $row["genre"] . "&emsp;Release Year: " . $row["releaseYear"]. "<br>";
 }
} else {
 echo "0 results <br>";
}


$sql5 = "DELETE FROM ksimmon1_movies WHERE releaseYear BETWEEN 0 AND 1980";
$result = $conn->query($sql5);
if ($conn->query($sql2) === TRUE) {
 echo "New record deleted successfully <br>";
} 
else {
 echo "Error: " . $sql2 . "<br>" . $conn->error. "<br>";
}

$sql4 = "SELECT movieName, language, genre, releaseYear FROM ksimmon1_movies";
$result = $conn->query($sql4);
if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo "Movie Name: " . $row["movieName"].  "&emsp;Language: " . $row["language"] . "&emsp;Genre: " . $row["genre"] . "&emsp;Release Year: " . $row["releaseYear"]. "<br>";
 }
} else {
 echo "0 results <br>";
}


$conn->close();

?>
</body>
</html>