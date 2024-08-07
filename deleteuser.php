<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "skyshelf";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) 
{
    $userId = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE user_id = $userId";
    if ($conn->query($sql) === TRUE) 
    {
        echo "User deleted successfully.";
    } else 
    {
        echo "Error deleting user: " . $conn->error;
    }
}
else 
{
    echo "User ID not provided.";
}

// Close the database connection
$conn->close();
?>