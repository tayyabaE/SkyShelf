<?php
// Establish a database connection (replace with your database credentials)
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["adminUsername"]) && isset($_POST["adminPassword"])) {
        $adminUsername = $_POST["adminUsername"];
        $adminPassword = $_POST["adminPassword"];

        // Check if the provided admin credentials match
        if ($adminUsername === "admin" && $adminPassword === "root") {
            // Redirect to admin panel
            header("Location: adminpanel.php");
            exit();
        } else {
            echo "<p style='color: red;'>Invalid admin username or password. Please try again.</p>";
        }
    } elseif (isset($_POST["username"])) {
        $username = $_POST["username"];
       
        // Check if the provided user credentials match the database
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // User exists in the database
            // You may want to add password validation logic here
            // For simplicity, let's assume the password is correct
            header("Location: library.php");
            exit();
        } else {
            // User not found in the database
            echo "<p style='color: red;'>Invalid username or password. Please try again or <a href='signup.php'>sign up</a>.</p>";
        }
    }
}

// Close the database connection
$conn->close();
?>
