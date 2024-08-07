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

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    // Update user details in the database
    $sql = "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname', dob='$dob', email='$email' WHERE user_id=$userId";

    if ($conn->query($sql) === TRUE) {
        // Redirect to userlist.php on successful update
        header("Location: userlist.php?message=User updated successfully.");
    } else {
        echo "Error updating user: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
