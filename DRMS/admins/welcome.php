<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php
// Database connection parameters
$servername = "localhost"; // Change to your database server name
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$database = "users"; // Your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data from the database
$query = "SELECT * FROM users";
$result = $conn->query($query);

// Close the database connection
$conn->close();
?>

<body>
    <div class="container">
        <h2>Welcome to admin panel!</h2>
        <h1>registered employees</h1>
    
    <?php
    // Check if there are any users in the database
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";
        
        // Output data for each user
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No users found in the database.";
    }
    ?>
</body>
        <p><a href="../registers/register.php">register a new user</a></p>
        <p><a href="../index.html">Logout</a></p>
    </div>

</body>
</html>
