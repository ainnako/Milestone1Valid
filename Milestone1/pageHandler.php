<!-- 
Project Name: Milestone1
Programmer: Alyssa Ainna Manlapig
Date: Feb 28,2019
Synopsis: Pagehandler.php will post user data to sql milestone1 db. and is stored there

 -->

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "milestone1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//create variables
$email = $_POST['Email'];
$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$uname = $_POST['UserName'];
$pword = $_POST['Password'];

/* insert values; */
$sql = "INSERT INTO users (EMAIL, FIRST_NAME, LAST_NAME, USERNAME, PASSWORD)
VALUES ('$fname', '$lname','$email','$uname','$pword')";

if ($conn->query($sql) === TRUE) {
    echo "Input received! Thanks for signing up!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

