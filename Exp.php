<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// Retrieve the email from the session variable
$email = $_SESSION["email"];

// Database connection details
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "discountbee";

// Create a new mysqli connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the query
$sql = "SELECT * FROM user_info WHERE email = '$email'";
$result = $conn->query($sql);

// Check if a row is found
if ($result->num_rows > 0) {
    // Fetch the user data
    $row = $result->fetch_assoc();
    
    // Debug output
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    // Display the user data
    echo "Email: " . $row["Email"] . "<br>";
    echo "Name: " . $row["Name"] . "<br>";
    // Add more fields to display as needed
} else {
    echo "No user found.";
}

// Close the database connection
$conn->close();
?>
</body>
</html>
