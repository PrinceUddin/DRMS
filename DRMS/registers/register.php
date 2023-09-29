<!DOCTYPE html>
<html>
<head>
    <title>DRMS Employee Registration</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Hash the password for security (you should use a stronger hashing method)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='../index.html'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<body>
    <div class="container">
        <h2>DRMS Employee Registration</h2>
        <form action="register.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>
