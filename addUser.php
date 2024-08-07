<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "skyshelf";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO users (username, firstname, lastname, dob, email) VALUES ('$username', '$firstname', '$lastname', '$dob', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to userlist.php on successful addition
    header("Location: userlist.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
