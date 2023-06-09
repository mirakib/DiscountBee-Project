<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "discountbee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    // Verify passwords match
    if ($password !== $confirmPassword) {
        $passwordError = "Passwords do not match";
    } 
    
    else {
        $stmt = $conn->prepare("INSERT INTO user_info (name, email, age, gender, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $name, $email, $age, $gender, $password);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: LoginHTML.php");
            exit; 
        } else {
            echo "Error: Failed to register user.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
