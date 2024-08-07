<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>User List - Sky Shelf</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #333;
    padding: 20px;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #3498db;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e5e5e5;
}
    </style>
</head>
<body>
    <h1>All Users</h1>

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

    // Fetch user information from the database
    $sql = "SELECT user_id, username, firstname, lastname, dob, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display user information in a table
        echo "<table>";
        echo "<tr>
        <th>User ID</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Actions</th>
        <th></th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["user_id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["lastname"] . "</td>";
            echo "<td>" . $row["dob"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td><a href='deleteuser.php?id=" . $row["user_id"] . "'>Delete</a></td>";
            echo "<td><a href='edituser.php?id=" . $row["user_id"] . "'>Edit</a></td>"; 
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No users found in the database.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
